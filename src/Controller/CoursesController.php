<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Courses Controller
 *
 * @property \App\Model\Table\CoursesTable $Courses
 *
 * @method \App\Model\Entity\Course[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoursesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $courses = $this->paginate($this->Courses);

        $this->set(compact('courses'));
    }

    /**
     * View method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $course = $this->Courses->get($id, [
            'contain' => ['Brochures', 'Quotations', 'Registrations']
        ]);

        $this->set('course', $course);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $course = $this->Courses->newEntity();
        if ($this->request->is('post')) {

           if (!empty($this->request->data['mainimage'])) {
            $file = $this->request->data['mainimage'];
            $destinationPath = WWW_ROOT . 'course_img' . DS;
            $filename = $this->request->data['mainimage']['name'];
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $arr_ext = array('jpg', 'jpeg','png', 'JPG');

            if (!in_array($extension, $arr_ext)) {

                $this->Flash->error(__('Incorrect Image Format.. Please Try Again'));

            }else{

                $uniqueFileName = time().'_'.mt_rand(10000000, 99999999).'_'.mt_rand(10000000, 99999999).'.'.$extension;
                move_uploaded_file($file['tmp_name'], $destinationPath . '/' . $uniqueFileName);
                $filePath = '/course_img/' . $uniqueFileName; 

            }
        }

        $course = $this->Courses->patchEntity($course, $this->request->data);
        $course->mainimage = $filePath;

        if ($this->Courses->save($course)) {
            $this->Flash->success(__('The course has been saved.'));

            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error(__('The course could not be saved. Please, try again.'));
        }
    }
    $this->set(compact('course'));
}

    /**
     * Edit method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */

    public function edit($id = null)
    {
        $course = $this->Courses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            if (!empty($this->request->data['mainimage']['name'])) {

                $file = $this->request->data['mainimage'];
                $destinationPath = WWW_ROOT . 'course_img' . DS;
                $filename = $this->request->data['mainimage']['name'];
                $extension = pathinfo($filename, PATHINFO_EXTENSION);
                $arr_ext = array('jpg', 'jpeg','png','JPG');

                if (!in_array($extension, $arr_ext)) {

                    $filePath = $this->request->data['blog_imgold'];
                    $this->Flash->error(__('Incorrect Image Format.. Please Try Again'));

                }else{
                    $uniqueFileName = time().'_'.mt_rand(10000000, 99999999).'_'.mt_rand(10000000, 99999999).'.'.$extension;
                    move_uploaded_file($file['tmp_name'], $destinationPath . '/' . $uniqueFileName);
                    $filePath = '/course_img/' . $uniqueFileName; 
                }

            }else {
                $filePath = $this->request->data['blog_imgold'];
            }

            $course = $this->Courses->patchEntity($course, $this->request->data);
            $course->mainimage = $filePath; 

            if ($this->Courses->save($course)) {
                $this->Flash->success(__('The course has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The course could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('course'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $course = $this->Courses->get($id);
        if ($this->Courses->delete($course)) {
            $this->Flash->success(__('The course has been deleted.'));
        } else {
            $this->Flash->error(__('The course could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
