<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GroupContacts Controller
 *
 * @property \App\Model\Table\GroupContactsTable $GroupContacts
 *
 * @method \App\Model\Entity\GroupContact[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GroupContactsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Groups', 'Contacts']
        ];
        $groupContacts = $this->paginate($this->GroupContacts);

        $this->set(compact('groupContacts'));
    }

    /**
     * View method
     *
     * @param string|null $id Group Contact id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $groupContact = $this->GroupContacts->get($id, [
            'contain' => ['Groups', 'Contacts']
        ]);

        $this->set('groupContact', $groupContact);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $groupContact = $this->GroupContacts->newEntity();
        if ($this->request->is('post')) {
            $groupContact = $this->GroupContacts->patchEntity($groupContact, $this->request->getData());
            if ($this->GroupContacts->save($groupContact)) {
                $this->Flash->success(__('The group contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The group contact could not be saved. Please, try again.'));
        }
        $groups = $this->GroupContacts->Groups->find('list', ['limit' => 200]);
        $contacts = $this->GroupContacts->Contacts->find('list', ['limit' => 200]);
        $this->set(compact('groupContact', 'groups', 'contacts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Group Contact id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $groupContact = $this->GroupContacts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $groupContact = $this->GroupContacts->patchEntity($groupContact, $this->request->getData());
            if ($this->GroupContacts->save($groupContact)) {
                $this->Flash->success(__('The group contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The group contact could not be saved. Please, try again.'));
        }
        $groups = $this->GroupContacts->Groups->find('list', ['limit' => 200]);
        $contacts = $this->GroupContacts->Contacts->find('list', ['limit' => 200]);
        $this->set(compact('groupContact', 'groups', 'contacts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Group Contact id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $groupContact = $this->GroupContacts->get($id);
        if ($this->GroupContacts->delete($groupContact)) {
            $this->Flash->success(__('The group contact has been deleted.'));
        } else {
            $this->Flash->error(__('The group contact could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
