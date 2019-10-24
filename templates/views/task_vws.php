<div class="row marketing">
        <div class="col-lg-12">

		
<?php  if($this->data['db']==0){ ?>

          <div class="alert alert-danger alert-dismissible" id="myAlert">
            <a href="#" class="close">&times;</a>
            <strong>Не смог </strong>подключить к БД.
          </div>

<?php }; ?>

<?php  if($this->data['add']==1){ ?>

          <div class="alert alert-success alert-dismissible" id="myAlert">
            <a href="#" class="close">&times;</a>
            <strong>Новая запись</strong> успешно добавлена.
          </div>

<?php }; ?>

<?php  if($this->data['add']==-1){ ?>

          <div class="alert alert-danger alert-dismissible" id="myAlert">
            <a href="#" class="close">&times;</a>
            <strong>Новая запись</strong> не создана.
          </div>

<?php }; ?>

          <h4>Корзина</h4>

<?php  if(count($this->data['data']) < 1){ ?>
		  
          <div class="jumbotron">
            <p class="lead">Пока корзина пуста. Добавьте задачу, чтобы убедиться, что все работает.</p>
          </div>
		  
<?php }; ?>