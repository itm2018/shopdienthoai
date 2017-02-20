<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\Exception\RecordNotFoundException;// php storm tu dong goi vao ma nen chu y xem no goi co dung kg
use Cake\I18n\Number;
use  Cake\View\Helper;
use Cake\Network\Exception\NotFoundException;
use Cake\Network\Exception\Exception;
use Cake\Core\App;
use Cake\ORM\TableRegistry;

class DienthoaisController extends AppController
{
    var $name = "Dienthoais";
    public $helpers = array('Form', 'Html', 'Url');
    public $components = array('Flash');

    // var $components = array('Session');
    //var $components = array('Session');
    public $uses = array('Dienthoais');

    public function exam01()
    {

        $data = $this->Dienthoais->find("all");
        $this->set("dienthoais", $data);
    }

    public function add()
    {

        if ($this->request->is('post')) {
            $data = $this->request->data;
            $dienthoaisTable = TableRegistry::get('Dienthoais');
            $dienthoai = $dienthoaisTable->newEntity();

            $dienthoai->TenDT = $data['TenDT'];
            $dienthoai->HinhAnh = $data['HinhAnh'];
            $dienthoai->maloai = $data['maloai'];
            $dienthoai->GiaBan = $data['GiaBan'];
            $dienthoai->GiaGoc = $data['GiaGoc'];
            //...

            if ($dienthoaisTable->save($dienthoai)) {
                // The $article entity contains the id now
                $id = $dienthoai->Seri;

                $this->Flash->success('Saved');
                // $this->redirect(array('action' => 'index'));
            } else {

                $this->Flash->warning('Fail!');
            }
        }
    }

    public function danhsach()
    {
        $data = $this->Dienthoais->find("all");
        $this->set('dienthoais', $data);
    }

    /**
     * xu ly xoa dien thoai
     * sau khi xoa xong thi redirect ve trang list
     * nen action nay khong can view cung duoc
     */
    public function delete()
    {
        // $this->Dienthoai->Seri= $id;
        if ($this->request->is('post')) {
            $Seri = $this->request->data('Seri');
            //tai vi khoa chinh dang khong phai la id ma la Seri nen khong su dung duoc ham get
            //muon xai duoc ham get phai chi dinh primary key trong entity
            $dienthoai = $this->Dienthoais->get($Seri);
            //sau nay co the khong xoa ma them 1 field la deleleted_flag chang han
            // neu xoa thi danh cap nhat no thanh 1, mac dinh la 0, chu khong can xoa han se mat du lieu
            //ok ok
            if ($this->Dienthoais->delete($dienthoai)) {
                $this->Flash->success('Deleted', array('class' => 'success'));
                return $this->redirect(array('controller' => 'dienthoais', 'action' => 'danhsach'));
            } else {
                $this->Flash->warning('Could not be deleted. Please, try again!', array('class' => 'warning'));
                //go ALT SHIFT F de format code
            }
        }

        //  return $this->redirect(['action' => 'index']);
    }

    //Edit
    public function edit($Seri = null)
    {
        //dau tien la phai lau duoc so Seri to route truyen vao
        //bay gio se lay data len de do ra view
        try{
            $dienthoai = $this->Dienthoais->get($Seri);
            $this->set('dienthoai', $dienthoai);
        }catch(RecordNotFoundException $e){
            throw new NotFoundException(__('Mobile not found'));
        }
        if ($this->request->is(['post', 'put'])) {
            //xu ly save vao record hien co
            $data = $this->request->data;
//            $dienthoaisTable = TableRegistry::get('Dienthoais');
//            $dienthoai = $dienthoaisTable->newEntity();//new entity se tao moi
            $dienthoai=$this->Dienthoais->get($Seri);
            $dienthoai->TenDT = $data['TenDT'];
            $dienthoai->HinhAnh = $data['HinhAnh'];
            $dienthoai->maloai = $data['maloai'];
            $dienthoai->GiaBan = $data['GiaBan'];
            $dienthoai->GiaGoc = $data['GiaGoc'];
            if ($this->Dienthoais->save($dienthoai)) {
                // The $article entity contains the id now
//                $id = $dienthoai->Seri;

                $this->Flash->success('Saved');
                return $this->redirect($this->here);
                // $this->redirect(array('action' => 'index'));
            } else {

                $this->Flash->warning('Fail!');
            }
        }
        //  $this->set('post', $dienthoai);
    }
}