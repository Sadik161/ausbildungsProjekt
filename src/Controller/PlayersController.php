<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\File;
use Cake\Filesystem\Folder;


/**
 * Players Controller
 *
 * @property \App\Model\Table\PlayersTable $Players
 *
 * @method \App\Model\Entity\Player[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlayersController extends AppController
{
	/**
	 * Index method
	 *
	 * @return \Cake\Http\Response|null
	 */
	public function index()
	{
		$this->paginate = [
			'contain' => ['Teams'],
		];
		$players = $this->paginate($this->Players);

		$this->set(compact('players'));
	}

	/**
	 * View method
	 *
	 * @param string|null $id Player id.
	 * @return \Cake\Http\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$player = $this->Players->get($id, [
			'contain' => ['Teams'],
		]);

		$this->set('player', $player);
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
	 */
	public function add()
	{
		$player = $this->Players->newEntity();
		if ($this->request->is('post')) {
			$player = $this->Players->patchEntity($player, $this->request->getData());
			if ($this->Players->save($player)) {
				$this->Flash->success(__('The player has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The player could not be saved. Please, try again.'));
		}
		$teams = $this->Players->Teams->find('list', ['limit' => 200]);
		$this->set(compact('player', 'teams'));
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id Player id.
	 * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function edit($id = null)
	{
		$player = $this->Players->get($id, [
			'contain' => [],
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$player = $this->Players->patchEntity($player, $this->request->getData());
			if ($this->Players->save($player)) {
				$this->Flash->success(__('The player has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The player could not be saved. Please, try again.'));
		}
		$teams = $this->Players->Teams->find('list', ['limit' => 200]);
		$this->set(compact('player', 'teams'));
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Player id.
	 * @return \Cake\Http\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$player = $this->Players->get($id);
		if ($this->Players->delete($player)) {
			$this->Flash->success(__('The player has been deleted.'));
		} else {
			$this->Flash->error(__('The player could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}

	public function isAuthorized($user)
	{
		if ($user['role'] === 'admin') {
			return true;
		}
		if ($user['role'] === 'user') {
			return false;
		}
	}

	public function upload()
	{
		$image = $this->Images->newEmptyEntity();

		if ($this->request->is('post')) {
			$file = $this->request->getData('image_file');


			$filename = uniqid() . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
			$uploadPath = WWW_ROOT . 'img' . DS . 'uploads' . DS . $filename;

			if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
				$image->filename = $filename;
				$image->mimetype = $file['type'];

				if ($this->Images->save($image)) {
					$this->Flash->success(__('Bild erfolgreich hochgeladen und gespeichert.'));
				} else {
					$this->Flash->error(__('Das Bild konnte nicht gespeichert werden.'));
				}
			} else {
				$this->Flash->error(__('Beim Hochladen des Bildes ist ein Fehler aufgetreten.'));
			}
		}

		$this->set('image', $image);
	}
}
