<div class="grid-margin stretch-card mt-3 animate__animated animate__pulse">
  <div class="card border round">
    <div class="card-body round">
      <h4 class="round"><a href="home.php?v=dashboard"><img src="../assets/images/icon/linear/arrow-left-2.svg"  /></a> Attendance</h4>
      <hr>
      <div class="row mb-3">
        <div class="col-sm-6">
          <div class="card border round">
            <div class="card-body">
              <h6 class="card-title"><?= date('l') ?>, <?= date('d F Y') ?></h6>
              <div class="row">
                <div style="width: 100%;" class="btn-group btn-sm">
                  <button type="button" class="btn btn-outline-secondary btn-sm" disabled=""><b style="color:#57B657">IN</b>
                    00:00:00
                  </button>
                  <button type="button" class="btn btn-outline-secondary btn-sm" disabled=""><b style="color:#FF4747">OUT</b>
                    00:00:00
                  </button>
                  <button type="button" class="btn btn-outline-secondary btn-sm" disabled=""><b style="color:#007bff">WT</b>
                    00:00:00
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <h5>Attendance History</h5>
      <hr>
      <div class="table-responsive p-3">
        <div class="row justify-content-between">
          <div class="col-lg-6 col-md-6 col-sm-12">

            <div class="row d-flex">
              <div class="col-auto mt-1 mb-2">
                Filter : 
              </div>
              <div class="col-lg-3 col-sm-12 px-1">
                <button class="form-control btn btn-sm btn-primary round mb-3"><?=date('F')?></button>
              </div>
              <div class="col-lg-3 sm-sm-12 px-1">
                <button class="form-control btn btn-sm btn-primary round mb-3"><?=date('Y')?></button>
              </div>
            </div>
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
                <th>Date</th>
                <th>Clock IN</th>
                <th>Clock Out</th>
                <th>Work Time</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Clock IN</th>
                <th>Clock Out</th>
                <th>Work Time</th>
              </tr>
            </tfoot>
          </table>
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
      ajax: '../dataset/attendance.json', //get data from json
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