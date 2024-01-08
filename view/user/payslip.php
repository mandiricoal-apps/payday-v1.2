<div class="grid-margin stretch-card mt-3 animate__animated animate__pulse">
  <div class="card border round">
    <div class="card-body round">
      <h4 class="round"><a href="home.php?v=dashboard"><img src="../assets/images/icon/linear/arrow-left-2.svg" alt="profile" /></a> Payslip</h4>
      <hr>
      <div class="row mb-3">
        <div class="col-lg-4 col-md-6 col-sm-12 pb-2">
          <a href="home.php?v=docsigned" style="text-decoration: none;color: #343a40;">
            <div class="card border round" style="background-color: #e3ffee;">
              <div class="card-body">
                <div class="d-flex">
                  <div class="p-2">
                    <div class="p-2">
                      <p class="card-text">NET</p>
                      <h4><b>12.000.000</b></h4>
                    </div>
                  </div>
                  <div class="ml-auto p-2">
                    <h5><img src="../assets/images/icon/linear/money.svg" /></h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 pb-2">
          <a href="#" style="text-decoration: none;color: #343a40;">
            <div class="card border round" style="background-color: #ffe2e2;">
              <div class="card-body">
                <div class="d-flex">
                  <div class="p-2">
                    <div class="p-2">
                      <p class="card-text">GROSS</p>
                      <h4><b>12.550.000</b></h4>
                    </div>
                  </div>
                  <div class="ml-auto p-2">
                    <h5><img src="../assets/images/icon/linear/money.svg"  /></h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="modal-body pt-2">
        <div class="row">
          <div class="col-lg-8 col-sm-6">
            <h5 class="modal-title pb-2">Personal Information</h5>
            <table class="table table-sm table-borderless">
              <tbody>
                <tr>
                  <td scope="row"><b>NIK</b></td>
                  <td align="right">3839</td>
                </tr>
                <tr>
                  <td scope="row"><b>Name</b></td>
                  <td align="right">Andika Debi Putra</td>
                </tr>
                <tr>
                  <td scope="row"><b>Golongan</b></td>
                  <td align="right"> ABC</td>
                </tr>
              </tbody>
            </table><hr>
            <h5 class="modal-title pb-2">Personal Information</h5>
            <table class="table table-sm table-borderless">
              <tbody>
                <tr>
                  <td scope="row"><b>Component</b></td>
                  <td align="right">500.000</td>
                </tr>
                <tr>
                  <td scope="row"><b>Component</b></td>
                  <td align="right">500.000</td>
                </tr>
                <tr>
                  <td scope="row"><b>Component</b></td>
                  <td align="right">500.000</td>
                </tr>
                <tr>
                  <td scope="row"><b>Component</b></td>
                  <td align="right">500.000</td>
                </tr>
              </tbody>
            </table><hr>
            <h5 class="modal-title pb-2">Personal Information</h5>
            <table class="table table-sm table-borderless">
              <tbody>
                <tr>
                  <td scope="row"><b>Component</b></td>
                  <td align="right">500.000</td>
                </tr>
                <tr>
                  <td scope="row"><b>Component</b></td>
                  <td align="right">500.000</td>
                </tr>
                <tr>
                  <td scope="row"><b>Component</b></td>
                  <td align="right">500.000</td>
                </tr>
                <tr>
                  <td scope="row"><b>Component</b></td>
                  <td align="right">500.000</td>
                </tr>
              </tbody>
            </table><hr>
            <h5 class="modal-title pb-2">Personal Information</h5>
            <table class="table table-sm table-borderless">
              <tbody>
                <tr>
                  <td scope="row"><b>Component</b></td>
                  <td align="right">500.000</td>
                </tr>
                <tr>
                  <td scope="row"><b>Component</b></td>
                  <td align="right">500.000</td>
                </tr>
                <tr>
                  <td scope="row"><b>Component</b></td>
                  <td align="right">500.000</td>
                </tr>
                <tr>
                  <td scope="row"><b>Component</b></td>
                  <td align="right">500.000</td>
                </tr>
              </tbody>
            </table><hr>
            <table class="table table-sm table-borderless">
              <tbody>
                <tr>
                  <td scope="row"><b>NET Icome</b></td>
                  <td align="right">12.000.000</td>
                </tr>
              </tbody>
            </table><br>
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