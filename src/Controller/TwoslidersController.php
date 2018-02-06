<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Twosliders Controller
 *
 * @property \App\Model\Table\TwoslidersTable $Twosliders
 *
 * @method \App\Model\Entity\Twoslider[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TwoslidersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $twosliders = $this->paginate($this->Twosliders);

        $this->set(compact('twosliders'));
    }

    /**
     * View method
     *
     * @param string|null $id Twoslider id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $twoslider = $this->Twosliders->get($id, [
            'contain' => []
        ]);

        $this->set('twoslider', $twoslider);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $twoslider = $this->Twosliders->newEntity();
        if ($this->request->is('post')) {

           if (!empty($this->request->data['image'])) {
            $file = $this->request->data['image'];
            $destinationPath = WWW_ROOT . 'two_slider' . DS;
            $filename = $this->request->data['image']['name'];
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $arr_ext = array('jpg', 'jpeg','png', 'JPG');

            if (!in_array($extension, $arr_ext)) {

                $this->Flash->error(__('Incorrect Image Format.. Please Try Again'));

            }else{

                $uniqueFileName = time().'_'.mt_rand(10000000, 99999999).'_'.mt_rand(10000000, 99999999).'.'.$extension;
                move_uploaded_file($file['tmp_name'], $destinationPath . '/' . $uniqueFileName);
                $filePath = '/two_slider/' . $uniqueFileName; 

            }
        }

        $twoslider = $this->Twosliders->patchEntity($twoslider, $this->request->data);
        $twoslider->image = $filePath;

        if ($this->Twosliders->save($twoslider)) {
            $this->Flash->success(__('The twoslider has been saved.'));

            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error(__('The twoslider could not be saved. Please, try again.'));
        }
    }
    $this->set(compact('twoslider'));
}

    /**
     * Edit method
     *
     * @param string|null $id Twoslider id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */

    public function edit($id = null)
    {
        $twoslider = $this->Twosliders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            if (!empty($this->request->data['image']['name'])) {

                $file = $this->request->data['image'];
                $destinationPath = WWW_ROOT . 'two_slider' . DS;
                $filename = $this->request->data['image']['name'];
                $extension = pathinfo($filename, PATHINFO_EXTENSION);
                $arr_ext = array('jpg', 'jpeg','png','JPG');

                if (!in_array($extension, $arr_ext)) {

                    $filePath = $this->request->data['blog_imgold'];
                    $this->Flash->error(__('Incorrect Image Format.. Please Try Again'));

                }else{
                    $uniqueFileName = time().'_'.mt_rand(10000000, 99999999).'_'.mt_rand(10000000, 99999999).'.'.$extension;
                    move_uploaded_file($file['tmp_name'], $destinationPath . '/' . $uniqueFileName);
                    $filePath = '/two_slider/' . $uniqueFileName; 
                }

            }else {
                $filePath = $this->request->data['blog_imgold'];
            }

            $twoslider = $this->Twosliders->patchEntity($twoslider, $this->request->data);
            $twoslider->image = $filePath; 

            if ($this->Twosliders->save($twoslider)) {
                $this->Flash->success(__('The twoslider has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The twoslider could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('twoslider'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Twoslider id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $twoslider = $this->Twosliders->get($id);
        if ($this->Twosliders->delete($twoslider)) {
            $this->Flash->success(__('The twoslider has been deleted.'));
        } else {
            $this->Flash->error(__('The twoslider could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
