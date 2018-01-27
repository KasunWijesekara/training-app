<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Quotations Controller
 *
 * @property \App\Model\Table\QuotationsTable $Quotations
 *
 * @method \App\Model\Entity\Quotation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuotationsController extends AppController
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
        $quotations = $this->paginate($this->Quotations);

        $this->set(compact('quotations'));
    }

    /**
     * View method
     *
     * @param string|null $id Quotation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quotation = $this->Quotations->get($id, [
            'contain' => ['Courses']
        ]);

        $this->set('quotation', $quotation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quotation = $this->Quotations->newEntity();
        if ($this->request->is('post')) {
            $quotation = $this->Quotations->patchEntity($quotation, $this->request->getData());
            if ($this->Quotations->save($quotation)) {
                $this->Flash->success(__('The quotation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quotation could not be saved. Please, try again.'));
        }
        $courses = $this->Quotations->Courses->find('list', ['limit' => 200]);
        $this->set(compact('quotation', 'courses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Quotation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quotation = $this->Quotations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quotation = $this->Quotations->patchEntity($quotation, $this->request->getData());
            if ($this->Quotations->save($quotation)) {
                $this->Flash->success(__('The quotation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quotation could not be saved. Please, try again.'));
        }
        $courses = $this->Quotations->Courses->find('list', ['limit' => 200]);
        $this->set(compact('quotation', 'courses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Quotation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quotation = $this->Quotations->get($id);
        if ($this->Quotations->delete($quotation)) {
            $this->Flash->success(__('The quotation has been deleted.'));
        } else {
            $this->Flash->error(__('The quotation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
