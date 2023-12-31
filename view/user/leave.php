<div class="grid-margin stretch-card mt-3 animate__animated animate__pulse">
  <div class="card border round">
    <div class="card-body round">
      <h4 class="round"><a href="home.php?v=dashboard"><img src="../assets/images/icon/linear/arrow-left-2.svg" alt="profile" /></a> Leave</h4>
      <hr>
      <div class="row mb-3">
        <div class="col-lg-3 col-md-12 col-sm-12 pb-2">
          <a href="#" style="text-decoration: none;color: #343a40;">
            <div class="card border round">
              <div class="card-body">
                <div class="d-flex">
                  <div class="p-2">
                    <p class="card-text">Total</p>
                    <h4><b>14</b></h4>
                  </div>
                  <div class="ml-auto p-2">
                    <h5><img src="../assets/images/icon/linear/info-circle.svg" alt="profile" /></h5>
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
                    <p class="card-text">Sisa Cuti Tahunan</p>
                    <h4><b>12</b></h4>
                  </div>
                  <div class="ml-auto p-2">
                    <h5><img src="../assets/images/icon/linear/info-circle.svg" alt="profile" /></h5>
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
                    <p class="card-text">Sisa Cuti Dinas</p>
                    <h4><b>2</b></h4>
                  </div>
                  <div class="ml-auto p-2">
                    <h5><img src="../assets/images/icon/linear/info-circle.svg" alt="profile" /></h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <h5>Leave History</h5>
      <hr>
      <div class="table-responsive p-3">
        <div class="row justify-content-between">
          <div class="col-lg-2 col-md-6 col-sm-12 align-self-end">
            <button class="form-control btn btn-sm btn-success round mb-3">+ Add</button>
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
                <th>Category</th>
                <th>Leave Date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Category</th>
                <th>Leave Date</th>
                <th>Actions</th>
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