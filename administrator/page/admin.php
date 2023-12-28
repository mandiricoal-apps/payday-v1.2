<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<div class="grid-margin stretch-card mt-3 animate__animated animate__pulse">
  <div class="card round">
    <div class="card-body round">
      <h4 class="round"><a href="home.php?v=dashboard"><img src="../assets/images/icon/linear/arrow-left-2.svg"  width="25px" /></a> Data Admin</h4>
      <hr>
      <div class="table-responsive p-3">
        <div class="row justify-content-between">
          <div class="col-lg-2 col-md-6 col-sm-12 align-self-end  mb-3">
            <button class="form-control btn btn-sm btn-success round">+ Add</button>
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
                  <button class="form-control btn-sm btn btn-primary mb-3" type="submit">Search</button>
                </div>
                <hr>
              </div>
            </form>
          </div>
        </div>

        <table id="datatables" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th>Status</th>
              <th>Name</th>
              <th>Company</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Status</th>
              <th>Name</th>
              <th>Company</th>
              <th>Actions</th>
            </tr>
          </tfoot>
        </table>
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
      ajax: 'dataset/admin.json', //get data from json
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