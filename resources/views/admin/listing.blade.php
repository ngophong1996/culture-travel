@extends('layouts.admin')

@section('content')

<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tables <small></small></h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
   
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Settings 1</a>
                    <a class="dropdown-item" href="#">Settings 2</a>
                  </div>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <table class="table table-bordered">
              <thead>
                <tr>
                    <?php foreach ($configs as $config){ ?>
                        <th><?=$config['name']?></th>
                        <?php } ?>
                </tr>
              </thead>
              <tbody>
                <?php foreach($records as $record){
                    ?>
                <tr>
                    <?php foreach ($configs as $config){ 
                        ?>
                        <?php switch($config['type']){
                            case "text": ?> <td><?=$record[$config['field']]?></td> <?php
                                break;
                            case "image": ?> <td> <img src="<?=$record[$config['field']]?>"/></td><?php
                                break;
                            case "copy": ?> <td> <a href="#"><i class="fa fa-clone" aria-hidden="true"></i>&nbsp;Copy</a> </td> <?php
                                break;
                            case "edit": ?> <td> <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Sửa</a></td> <?php
                                break;
                            case "delete": ?> <td> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Xoá</a></td> <?php
                                break;
                        } ?>
                        <?php } ?>
                </tr>
                <?php }?>
              </tbody>
            </table>
               <?= $records->links("pagination::bootstrap-4")?>
          </div>
        </div>
      </div>

      

      
                    
                
    </div>
@endsection