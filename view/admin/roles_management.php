<div class="grid-margin stretch-card mt-3 animate__animated animate__pulse">
  <div class="card border round">
    <div class="card-body round">
      <h4 class="round"><a href="home.php?v=dashboard"><img src="../assets/images/icon/linear/arrow-left-2.svg" width="25px"/></a> Data User</h4>
      <br>
      <h5>User Summary</h5>
      <hr>
      <div class="row mb-3">
        <div class="col-lg-3 col-md-12 col-sm-12 pb-2">
          <a href="#" style="text-decoration: none;color: #343a40;">
            <div class="card border round">
              <div class="card-body">
                <div class="d-flex">
                  <div class="p-2">
                    <p class="card-text">User Total</p>
                    <h4><b>12</b></h4>
                  </div>
                  <div class="ml-auto p-2">
                    <h5><img src="../assets/images/icon/linear/user.svg" alt="profile" /></h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 pb-2">
          <a href="#" style="text-decoration: none;color: #343a40;">
            <div class="card border round">
              <div class="card-body">
                <div class="d-flex">
                  <div class="p-2">
                    <p class="card-text">User New (<?= date('F')?>)</p>
                    <h4><b>21</b></h4>
                  </div>
                  <div class="ml-auto p-2">
                    <h5><img src="../assets/images/icon/linear/user.svg" alt="profile" /></h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 pb-2">
          <a href="#" style="text-decoration: none;color: #343a40;">
            <div class="card border round" style="background-color: #e3ffee;">
              <div class="card-body">
                <div class="d-flex">
                  <div class="p-2">
                    <p class="card-text">User Active</p>
                    <h4><b>220</b></h4>
                  </div>
                  <div class="ml-auto p-2">
                    <h5><img src="../assets/images/icon/linear/user.svg" alt="profile" /></h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 pb-2">
          <a href="#" style="text-decoration: none;color: #343a40;">
            <div class="card border round" style="background-color: #ffe2e2;">
              <div class="card-body">
                <div class="d-flex">
                  <div class="p-2">
                    <p class="card-text">User Inactive</p>
                    <h4><b>2</b></h4>
                  </div>
                  <div class="ml-auto p-2">
                    <h5><img src="../assets/images/icon/linear/user.svg" alt="profile" /></h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <h5>User List</h5>
      <hr>
      <div class="table-responsive p-3">
        <div class="row justify-content-between">
          <div class="col-lg-2 col-md-6 col-sm-12 align-self-end  mb-3">
            <button class="form-control btn btn-sm btn-outline-info round mb-2"><img src="../assets/images/icon/sap.svg" width="25px"/> Synchronize</button>
            <center><small class=""><i><b>Latest :</b> 12-12-2023 08:00</i></small></center>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <form method="POST">
              <div class="row">
                <div class="col-lg-4 col-md-12 px-1">
                  <input class="form-control form-control-sm mb-2" type="date" placeholder="from" required>
                </div>
                <div class="col-lg-4 col-md-12 px-1">
                  <input class="form-control form-control-sm mb-2" type="date" placeholder="to" required>
                </div>
                <div class="col-lg-4 col-md-12">
                  <button class="form-control btn-sm btn btn-info mb-3" type="submit">Search</button>
                </div>
                <hr>
              </div>
            </form>
          </div>
        </div>

        <div class="table-responsive">
          <table id="datatables" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>Name</th>
                <th>Divisi</th>
                <th>Last Login</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Divisi</th>
                <th>Last Login</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- Modal Detail-->
<div class="modal fade" id="modalDetailUser" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-top" role="document">
    <div class="modal-content" style="border-radius: 15px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Detail User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pt-2">
        <h5 class="modal-title pb-2">Personal Information</h5>
        <table class="table table-sm table-borderless">
          <tbody>
            <tr>
              <td scope="row"><b>NIK</b></td>
              <td>: 3839</td>
            </tr>
            <tr>
              <td scope="row"><b>Name</b></td>
              <td>:&emsp;Andika Debi Putra</td>
            </tr>
            <tr>
              <td scope="row"><b>Jabatan</b></td>
              <td>:&emsp; Supervisor</td>
            </tr>
            <tr>
              <td scope="row"><b>Department</b></td>
              <td>:&emsp; Software Engineering</td>
            </tr>
            <tr>
              <td scope="row"><b>Divisi</b></td>
              <td>:&emsp; ITE</td>
            </tr>
            <tr>
              <td scope="row"><b>Company</b></td>
              <td>:&emsp; MIP</td>
            </tr>
          </tbody>
        </table><br>

        <h5 class="modal-title pb-2">Authorization</h5>
        <table class="table table-sm table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Application</th>
              <th scope="col">Autorization</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Optimals</td>
              <td>✔</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Sisakty</td>
              <td>✔</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Siaga</td>
              <td></td>
            </tr>
          </tbody>
        </table><br>
        <small><i><b>Update by :</b> Admin MIP, at 12-12-2020 08:00</i></small>
      </div>
    </div>
  </div>
</div>


<!-- Modal Authorization-->
<div class="modal fade" id="modalAuth" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-top" role="document">
    <div class="modal-content" style="border-radius: 15px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Roles Management</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pt-2">
        <h5 class="modal-title pb-2">Authorization</h5>
        <table class="table table-sm table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Roles</th>
              <th scope="col">Autorization</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Super Admin</td>
              <td>
                <div class="form-group ml-3">
                  <input class="form-check-input" type="checkbox" value="">
                </div>
              </td>
            </tr>            
            <tr>
              <th scope="row">2</th>
              <td>Admin Company</td>
              <td>
                <div class="form-group ml-3">
                  <input class="form-check-input" type="checkbox" value="">
                </div>
              </td>
            </tr>           
            <tr>
              <th scope="row">3</th>
              <td>Admin HRD</td>
              <td>
                <div class="form-group ml-3">
                  <input class="form-check-input" type="checkbox" value="">
                </div>
              </td>
            </tr>          
            <tr>
              <th scope="row">4</th>
              <td>Employee</td>
              <td>
                <div class="form-group ml-3">
                  <input class="form-check-input" type="checkbox" checked readonly>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-basic border round w-25" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-info round w-25">Save</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('#datatables tfoot tr')
    .clone(true)
    .addClass('filters')
    .appendTo('#datatables tfoot');

    var table = $('#datatables').DataTable({
      ajax: '../dataset/user.json',
      orderCellsBottom: true,
      fixedHeader: true,
      order: [
      [1, 'desc']
      ],
      initComplete: function() {
        var api = this.api();
        api
        .columns()
        .eq(0)
        .each(function(colIdx) {
          var cell = $('.filters th').eq(
            $(api.column(colIdx).header()).index()
            );
          var title = $(cell).text();
          $(cell).html('<input type="text" placeholder=" search by ' + title + '" width="20px" />');
          $(
            'input',
            $('.filters th').eq($(api.column(colIdx).header()).index())
            )
          .off('keyup change')
          .on('change', function(e) {
            $(this).attr('title', $(this).val());
            var regexr = '({search})';

            var cursorPosition = this.selectionStart;
            api
            .column(colIdx)
            .search(
              this.value != '' ?
              regexr.replace('{search}', '(((' + this.value + ')))') :
              '',
              this.value != '',
              this.value == ''
              )
            .draw();
          })
          .on('keyup', function(e) {
            e.stopPropagation();

            $(this).trigger('change');
            $(this)
            .focus()[0]
            .setSelectionRange(cursorPosition, cursorPosition);
          });
        });
      },
    });
  });
</script>