<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
     public function login()
    {   
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user && $user['activo'] ){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());  
                } elseif ($user && ($user['activo'] == false)) {
                $this->Flash->error(__('El Usuario aun no está activado.'));   
            } else {
                $this->Flash->error(__('Nombre de usuario o contraseña incorrectos',['key'=> 'auth']));
            }
        }
    }
      public function beforeFilter(\Cake\Event\Event $event)
    {
         parent::beforeFilter($event);
         $this->Auth->allow(["add"]);
    }

          public function viewuser($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Vinos']
        ]);

        $this->set('user', $user);
    }
     
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }
    public function solover()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Vinos']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->role= "usuario";
            $user->activo= 0;
            
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuario guardado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Usuario no guardado, intente nuevamente.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function logout() {
        return $this->redirect($this->Auth->logout());
        
    }
    public function home() {
        
        $this->render();
    }
      public function menu() {
        
        $this->render();
    }
         public function transferswines() {
        
        $this->render();
    }
    public function isAuthorized($user) 
            {
        if (isset($user["role"])and $user["role"] === "usuario"){
            if(in_array($this -> request -> action, ["solover","logout","menu","add","transferswines","view","viewuser"]))
            {
            return true;
        }
        
     
    }
    return parent::isAuthorized($user);

            }
}
