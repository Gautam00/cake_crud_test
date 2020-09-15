<?php 

namespace App\Controller;

/**
 * 
 */
class UsersController extends AppController
{
	
	public function index() {

		$this->set( 'users', $this->Users->find('all') );

	}


	public function add() {

		$createUser = $this->Users->newEntity();

		if( $this->request->is('post') ) {

			$createUser = $this->Users->patchEntity( $createUser, $this->request->getData() );
			$this->Users->save( $createUser );

			return $this->redirect( ['action' => 'index' ] );

		}

		$this->set( 'users', $createUser );

	}



	public function edit( $id ) {

		$updateUser = $this->Users->get($id);

		if ( $this->request->is( ['post','put'] ) ) {
			
			$updateUser = $this->Users->patchEntity( $updateUser, $this->request->getData() );
			$updateUser->modified = date('Y-m-d H:i:s');
			$this->Users->save( $updateUser );

			return $this->redirect( ['action' => 'index'] );

		}

		$this->set( 'name', $updateUser->name );
		$this->set( 'email', $updateUser->email );
		$this->set( 'address', $updateUser->address );
		$this->set( 'phone', $updateUser->phone );

	}


	public function delete( $id ) {

		$this->request->allowmethod( ['post', 'delete'] );
		$deleteUser = $this->Users->get( $id );
		$this->Users->delete( $deleteUser );

		return $this->redirect( ['action' => 'index'] );

	}

}

?>