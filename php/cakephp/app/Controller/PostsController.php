<?

class PostsController extends AppController {

    var $uses = array();
	public $helpers = array('Html', 'Form');

    public $name = 'Posts';
    //public $components = array('Session');
    public $components = array('Auth','Session');

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Post->create();
            $this->request->data['Post']['user_id'] = $this->Auth->user('id'); //Added this line
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
            }
            else {
                $this->Session->setFlash('Unable to add your post.');
            }
        }
    }
}

?>