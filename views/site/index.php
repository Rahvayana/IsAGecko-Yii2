<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Absensi Karyawan';
?>
<div class="container">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <button type="button" class="tombol-ambil-gambar" data-toggle="modal" data-target="#myModal" >
            <div class="box-photo" onclick="" style=" background-color: #f5f2f254; width: 100%;  line-height: 300px; border-style: dotted; border-color: darkgrey;">
                <img src="img/logo.png" id="logo-kadal" alt="" width="10%">
                <canvas id="canvas" width="380px" height="300px" style="position: relative; display: block; margin: 0 auto;"></canvas>
            </div>
        </button>
    </div>
    <div class="col-md-2">
    </div>
</div>
<div class="row" style="margin-bottom: 10px;">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <table width="100%">
        <?= Html::beginForm(['/proses-absensi'], 'post', ['enctype' => 'multipart/form-data']) ?>
                <tr>
                    <td>
                        <select id="select" name="keterangan" class="form-control" style="border-radius: 0px;">
                            <option value="Masuk" selected>----- Keterangan -----</option>
                            <option value="Masuk">Masuk</option>
                            <option value="Izin">Izin</option>
                        </select>
                    </td>
                </tr>
                <tr></tr>
                <br>
                <tr>
                    <td>
                        <input type="hidden" name="lat" value="" placeholder="" id="latitude" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="long" value="" placeholder="" id="longitude" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <textarea id="textarea" name="detail" wrap="VIRTUAL" class="form-control" cols="50" rows="5" placeholder="Masukkan keterangan kenapa Anda tidak Masuk Kerja: cth: sakit, kunjungan kerja dll"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <?= Html::submitButton('Submit', array('class' => 'btn btn-primary', 'style' => 'width:100%; border-radius:0px;')) ?>
                    </td>
                </tr>
                <?= Html::endForm() ?>
        </table>
    </div>
    <div class="col-md-2"></div>
</div>
<div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <video autoplay="true" id="video-webcam" width="100%"></video>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="capture" style="display: block; margin-right: auto; margin-left: auto">Ambil!</button>
            </div>
        </div>
    </div>
</div>
</div>