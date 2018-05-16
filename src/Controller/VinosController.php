<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vinos Controller
 *
 * @property \App\Model\Table\VinosTable $Vinos
 *
 * @method \App\Model\Entity\Vino[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VinosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $vinos = $this->paginate($this->Vinos);

        $this->set(compact('vinos'));
    }
    
    public function solover()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $vinos = $this->paginate($this->Vinos);

        $this->set(compact('vinos'));
    }

    /**
     * View method
     *
     * @param string|null $id Vino id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vino = $this->Vinos->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('vino', $vino);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vino = $this->Vinos->newEntity();
        if ($this->request->is('post')) {
            $vino = $this->Vinos->patchEntity($vino, $this->request->getData());
            if ($this->Vinos->save($vino)) {
                $this->Flash->success(__('The vino has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vino could not be saved. Please, try again.'));
        }
        $users = $this->Vinos->Users->find('list', ['limit' => 200]);
        $this->set(compact('vino', 'users'));
    }
 public function adduser()
    {
        $vino = $this->Vinos->newEntity();
        if ($this->request->is('post')) {
            $vino = $this->Vinos->patchEntity($vino, $this->request->getData());
            if ($this->Vinos->save($vino)) {
                $this->Flash->success(__('The vino has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vino could not be saved. Please, try again.'));
        }
        $users = $this->Vinos->Users->find('list', ['limit' => 200]);
        $this->set(compact('vino', 'users'));
    }
    /**
     * Edit method
     *
     * @param string|null $id Vino id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vino = $this->Vinos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vino = $this->Vinos->patchEntity($vino, $this->request->getData());
            if ($this->Vinos->save($vino)) {
                $this->Flash->success(__('The vino has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vino could not be saved. Please, try again.'));
        }
        $users = $this->Vinos->Users->find('list', ['limit' => 200]);
        $this->set(compact('vino', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vino id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vino = $this->Vinos->get($id);
        if ($this->Vinos->delete($vino)) {
            $this->Flash->success(__('The vino has been deleted.'));
        } else {
            $this->Flash->error(__('The vino could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function isAuthorized($user) 
            {
        if (isset($user["role"])and $user["role"] === "alumno"){
            if(in_array($this -> request -> action, ["solover","logout","home","add"]))
            {
            return true;
        }
     
    }
    return parent::isAuthorized($user);

            }
}