<div class="grid-margin stretch-card mt-3 animate__animated animate__pulse">
  <div class="card border round">
    <div class="card-body round">
      <h4 class="round"><a href="home.php?v=dashboard"><img src="../assets/images/icon/linear/arrow-left-2.svg" alt="profile" /></a> Profile</h4>
      <hr>
      <div class="card border round mb-3" style="background-color: rgba(36, 138, 253, 0.2);">
        <div class="card-body">
          <div class="d-flex">
            <div class="p-2">
              <h4><b>Perhatian !</b></h4>
              <p class="card-text">Data yang ditampilkan sesuai dengan data sistem SAP, jika ada ketidaksesuaian data silahkan hubungi tim HR.</p>
            </div>
            <div class="ml-auto p-2">
              <h5><img src="../assets/images/icon/linear/info-circle.svg" alt="profile"></h5>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-body pt-2">
        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <h5 class="modal-title pb-2">Personal Information</h5>
            <table class="table table-sm table-borderless">
              <tbody>
                <tr>
                  <td scope="row"><b>NIK</b></td>
                  <td>:&emsp;3839</td>
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
          </div>

          <div class="col-lg-6 col-sm-12">
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
  </div>
</div>

<script>
  $(document).ready(function() {
    $('#datatables tfoot tr')
    .clone(true)
    .addClass('filters')
    .appendTo('#datatables tfoot');

    var table = $('#datatables').DataTable({
      ajax: '../dataset/leave.json', //get data from json
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
          $(cell).html('<input type="text" placeholder=" search by ' + title + '" />');
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