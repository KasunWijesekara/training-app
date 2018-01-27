<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Onesliders Controller
 *
 * @property \App\Model\Table\OneslidersTable $Onesliders
 *
 * @method \App\Model\Entity\Oneslider[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OneslidersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $onesliders = $this->paginate($this->Onesliders);

        $this->set(compact('onesliders'));
    }

    /**
     * View method
     *
     * @param string|null $id Oneslider id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $oneslider = $this->Onesliders->get($id, [
            'contain' => []
        ]);

        $this->set('oneslider', $oneslider);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $oneslider = $this->Onesliders->newEntity();
        if ($this->request->is('post')) {

           if (!empty($this->request->data['image'])) {
            $file = $this->request->data['image'];
            $destinationPath = WWW_ROOT . 'one_slider' . DS;
            $filename = $this->request->data['image']['name'];
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $arr_ext = array('jpg', 'jpeg','png', 'JPG');

            if (!in_array($extension, $arr_ext)) {

                $this->Flash->error(__('Incorrect Image Format.. Please Try Again'));

            }else{

                $uniqueFileName = time().'_'.mt_rand(10000000, 99999999).'_'.mt_rand(10000000, 99999999).'.'.$extension;
                move_uploaded_file($file['tmp_name'], $destinationPath . '/' . $uniqueFileName);
                $filePath = '/one_slider/' . $uniqueFileName; 

            }
        }

        $oneslider = $this->Onesliders->patchEntity($oneslider, $this->request->data);
        $oneslider->image = $filePath;

        if ($this->Onesliders->save($oneslider)) {
            $this->Flash->success(__('The oneslider has been saved.'));

            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error(__('The oneslider could not be saved. Please, try again.'));
        }
    }
    $this->set(compact('oneslider'));
}

    /**
     * Edit method
     *
     * @param string|null $id Oneslider id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */

    public function edit($id = null)
    {
        $oneslider = $this->Venprojects->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            if (!empty($this->request->data['image']['name'])) {

                $file = $this->request->data['image'];
                $destinationPath = WWW_ROOT . 'one_slider' . DS;
                $filename = $this->request->data['image']['name'];
                $extension = pathinfo($filename, PATHINFO_EXTENSION);
                $arr_ext = array('jpg', 'jpeg','png','JPG');

                if (!in_array($extension, $arr_ext)) {

                    $filePath = $this->request->data['blog_imgold'];
                    $this->Flash->error(__('Incorrect Image Format.. Please Try Again'));

                }else{
                    $uniqueFileName = time().'_'.mt_rand(10000000, 99999999).'_'.mt_rand(10000000, 99999999).'.'.$extension;
                    move_uploaded_file($file['tmp_name'], $destinationPath . '/' . $uniqueFileName);
                    $filePath = '/one_slider/' . $uniqueFileName; 
                }

            }else {
                $filePath = $this->request->data['blog_imgold'];
            }

            $oneslider = $this->Venprojects->patchEntity($oneslider, $this->request->data);
            $oneslider->image = $filePath; 

            if ($this->Venprojects->save($oneslider)) {
                $this->Flash->success(__('The oneslider has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The oneslider could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('oneslider'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Oneslider id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $oneslider = $this->Onesliders->get($id);
        if ($this->Onesliders->delete($oneslider)) {
            $this->Flash->success(__('The oneslider has been deleted.'));
        } else {
            $this->Flash->error(__('The oneslider could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
