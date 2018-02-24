<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{   
    public function beforeFilter(Event $event)
    {   
// parent::beforeFilter($event);
// $this->Auth->allow('index');
// 
        $this->Auth->allow();
    }

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    public function index()
    {
        $this->viewBuilder()->layout('frontend');
        $this->set('title', 'Home Page');
        $this->set('body', 'home');

        $this->loadModel('Onesliders');
        $opts1['conditions'] =  array('Onesliders.status' => 1);
        $oneslider = $this->Onesliders->find('all',$opts1);
        $this->set('oneslider', $oneslider);
        $this->set('_serialize', ['oneslider']);

        $this->loadModel('Twosliders');
        $opts1['conditions'] =  array('Twosliders.status' => 1);
        $twoslider = $this->Twosliders->find('all',$opts1);
        $this->set('twoslider', $twoslider);
        $this->set('_serialize', ['twoslider']);
    }

    public function about()
    {
        $this->viewBuilder()->layout('frontend');
        $this->set('title', 'About Page');
        $this->set('body', 'home');
    }

    public function programs()
    {
        $this->viewBuilder()->layout('frontend');
        $this->set('title', 'Programs Page');
        $this->set('body', 'home');

        $this->loadModel('Brochures');
        $this->loadModel('Courses');

        $courseitem = $this->Courses->find('all')
        ->select(['Courses.id' , 'Courses.title' , 'Courses.description' , 'Courses.mainimage' , 
            'Courses.created'  ,'Courses.status' , 'Brochures.id' , 'Brochures.course_id' , 'Brochures.pdffile'])
        ->leftJoinWith('Brochures')
        ->where(['Courses.status' => 1])
        ->toArray();    

        $this->set('courseitem', $courseitem);
        $this->set('_serialize', ['courseitem']);
    }

    public function programSingle($id = null)
    {
        $this->viewBuilder()->layout('singlelayout');
        $this->set('title', 'Programs Single');
        $this->set('body', 'portfolio');

        $this->loadModel('Brochures');
        $this->loadModel('Courses');

        $opts15['conditions'] =  array('Courses.id' => $id);
        $courseitem = $this->Courses->find('all',$opts15)
        ->select(['Courses.id' , 'Courses.title' , 'Courses.description' , 'Courses.mainimage' , 
            'Courses.created'  ,'Courses.status' , 'Brochures.id' , 'Brochures.course_id' , 'Brochures.pdffile'])
        ->leftJoinWith('Brochures')
        ->where(['Courses.status' => 1])
        ->toArray();    

        $this->set('courseitem', $courseitem);
        $this->set('_serialize', ['courseitem']);

        
    }

    public function contact()
    {
        $this->viewBuilder()->layout('frontend');
        $this->set('title', 'Contact Page');
        $this->set('body', 'home');
    }
}
