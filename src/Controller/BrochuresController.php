<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Brochures Controller
 *
 * @property \App\Model\Table\BrochuresTable $Brochures
 *
 * @method \App\Model\Entity\Brochure[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BrochuresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Courses']
        ];
        $brochures = $this->paginate($this->Brochures);

        $this->set(compact('brochures'));
    }

    /**
     * View method
     *
     * @param string|null $id Brochure id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $brochure = $this->Brochures->get($id, [
            'contain' => ['Courses']
        ]);

        $this->set('brochure', $brochure);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */

    public function add()
    {
        $brochure = $this->Brochures->newEntity();
        if ($this->request->is('post')) {

         if (!empty($this->request->data['pdffile'])) {
            $file = $this->request->data['pdffile'];
            $destinationPath = WWW_ROOT . 'brochure' . DS;
            $filename = $this->request->data['pdffile']['name'];
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $arr_ext = array('pdf');

            if (!in_array($extension, $arr_ext)) {

                $this->Flash->error(__('Incorrect Image Format.. Please Try Again'));

            }else{

                $uniqueFileName = time().'_'.mt_rand(10000000, 99999999).'_'.mt_rand(10000000, 99999999).'.'.$extension;
                move_uploaded_file($file['tmp_name'], $destinationPath . '/' . $uniqueFileName);
                $filePath = '/brochure/' . $uniqueFileName; 

            }
        }

        $brochure = $this->Brochures->patchEntity($brochure, $this->request->data);
        $brochure->pdffile = $filePath;

        if ($this->Brochures->save($brochure)) {
            $this->Flash->success(__('The brochure has been saved.'));

            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error(__('The brochure could not be saved. Please, try again.'));
        }
    }
    $courses = $this->Brochures->Courses->find('list', ['limit' => 200]);
    $this->set(compact('brochure', 'courses'));
}

    /**
     * Edit method
     *
     * @param string|null $id Brochure id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */

    public function edit($id = null)
    {
        $brochure = $this->Brochures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            if (!empty($this->request->data['pdffile']['name'])) {

                $file = $this->request->data['pdffile'];
                $destinationPath = WWW_ROOT . 'brochure' . DS;
                $filename = $this->request->data['pdffile']['name'];
                $extension = pathinfo($filename, PATHINFO_EXTENSION);
                $arr_ext = array('pdf');

                if (!in_array($extension, $arr_ext)) {

                    $filePath = $this->request->data['blog_imgold'];
                    $this->Flash->error(__('Incorrect Image Format.. Please Try Again'));

                }else{
                    $uniqueFileName = time().'_'.mt_rand(10000000, 99999999).'_'.mt_rand(10000000, 99999999).'.'.$extension;
                    move_uploaded_file($file['tmp_name'], $destinationPath . '/' . $uniqueFileName);
                    $filePath = '/brochure/' . $uniqueFileName; 
                }

            }else {
                $filePath = $this->request->data['blog_imgold'];
            }

            $brochure = $this->Brochures->patchEntity($brochure, $this->request->data);
            $brochure->pdffile = $filePath; 

            if ($this->Brochures->save($brochure)) {
                $this->Flash->success(__('The brochure has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The brochure could not be saved. Please, try again.'));
            }
        }
        $courses = $this->Brochures->Courses->find('list', ['limit' => 200]);
        $this->set(compact('brochure', 'courses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Brochure id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $brochure = $this->Brochures->get($id);
        if ($this->Brochures->delete($brochure)) {
            $this->Flash->success(__('The brochure has been deleted.'));
        } else {
            $this->Flash->error(__('The brochure could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
