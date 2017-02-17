<?php
require '../config.php';
//require_once '../classes/contacts.php';
require_once '../functions.php';
require_once '../admin.php';
 $contacts=contacts::getcontact();
var_dump($contacts);
?>

<div class="row" id="contacts">

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Contacts</h3>

            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <!-- <th>ID</th> -->
                        <th>ID</th>
                        <th>name</th>
                        <th>email</th>
                        <th>message</th>
                        <th>
                          status
                        </th>
                        <th>Action</th>
                    </tr>

                    </thead>
                    <tbody>
                    <?php foreach ($contacts as $contact){?>
                    <tr>
                        <td><?= $contact['id'] ?></td>
                        <td><?= $contact['name'] ?></td>
                        <td><?= $contact['email'] ?></td>
                        <td><?= $contact['message'] ?></td>
                          <?php if($contact['is_valid']==1) { ?>
                            <td class="state">Valid</td>
                            <?php }else{?>
                              <td class="state">Invalid</td>
                              <?php }?>

                        <td>
                            <button type="button" name="<?= $contact['id'] ?>" onclick="return false;" class="btn btn-primary" class="delContact">Delete <span class="glyphicon glyphicon-remove"></span></button>
                        </td>
                    </tr>
                    <?php }?>

                    </tbody>
                    <tfoot>
                    <tr>

                      <th>ID</th>
                      <th>NAME</th>
                      <th>email</th>
                      <th>message</th>
                      <th>status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
<script>
    $(function () {
        $('.content').append($('#contacts'));
        $('#example1').DataTable();



    });
    $("button").on("click",function(){
        // alert("cicked");
        $.ajax({
          url:"/contacts/delete.php/?id="+$(this).attr('name'),
          method:"GET",
          success:function(response){
//            alert(response);
            location.reload();

          }

        })
    })

</script>
