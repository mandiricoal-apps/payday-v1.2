<div class="grid-margin stretch-card mt-3 animate__animated animate__pulse">
  <div class="card border round">
    <div class="card-body round">
      <h4 class="round"><a href="home.php?v=dashboard"><img src="../assets/images/icon/linear/arrow-left-2.svg"  /></a> Document Approval</h4>
      <hr>
      <div class="row mb-3">
        <div class="col-lg-3 col-md-12 col-sm-12 pb-2">
          <a href="home.php?v=docsigned" style="text-decoration: none;color: #343a40;">
            <div class="card border round" style="background-color: #e3ffee;">
              <div class="card-body">
                <div class="d-flex">
                  <div class="p-2">
                    <h5>Signed</h5>
                  </div>
                  <div class="ml-auto p-2">
                    <h5><img src="../assets/images/icon/linear/tick-circle.svg" /></h5>
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
                    <h5>Template</h5>
                  </div>
                  <div class="ml-auto p-2">
                    <h5><img src="../assets/images/icon/linear/document-download.svg"  /></h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <h5>Document Approval History <small>( Last 1 month )</small></h5>
      <hr>
      <div class="table-responsive p-3">
        <div class="row justify-content-between">
          <div class="col-lg-2 col-md-6 col-sm-12 align-self-end">
            <button class="form-control btn btn-sm btn-success round mb-3" title='Add' data-toggle='modal' data-target='#modalAddDocument'>+ Add</button>
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
                <th>Date</th>
                <th>Document Type</th>
                <th>Share With</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Date</th>
                <th>Document Type</th>
                <th>Share With</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- MODAL ADD DOCUMENT APPROVAL -->
<div class="modal fade" id="modalAddDocument" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 700px;">
    <div class="modal-content" style="border-radius: 15px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Document Approval</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="myForm" class="needs-validation" action="home.php?v=docsubmit" novalidate>
        <div class="modal-body">
          <div class="form-group">
            <label for="name">Document Number<span class="text-danger">*</span></label>
            <input type="text" class="form-control round" id="" name="" value="DN-00001" disabled required>
            <div class="invalid-feedback">Please fill out this field !</div>
          </div>
          <div class="form-group">
            <label>Approval Options<span class="text-danger">*</span></label>
            <div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="pararel" name="approvalOption" value="pararel" checked required>
                <label class="custom-control-label" for="pararel">Paralel</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="sequence" name="approvalOption" value="sequence" required>
                <label class="custom-control-label" for="sequence">Sequence</label>
              </div>
              <div class="invalid-feedback">Please select an option!</div>
            </div>
          </div>
          <div class="form-group">
            <label for="role">Document Type<span class="text-danger">*</span></label>
            <select class="form-control round" id="" name="" required>
              <option value="">Document Type</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
            <div class="invalid-feedback">Please fill out this field !</div>
          </div>
          <div class="form-group">
            <label for="alamat">Description<span class="text-danger">*</span></label>
            <textarea class="form-control round" placeholder="Description" rows="3" id="" name="" required></textarea>
            <div class="invalid-feedback">Please fill out this field !</div>
          </div>
          <div class="form-group">
            <label for="foto">Document<span class="text-danger">*</span><small><i> (Max Size : 10mb)</i></small></label><br>
            <input id="input-foto" type="file" class="file" data-show-upload="false" data-show-caption="true" id="" name="" required>
            <div class="invalid-feedback">Please fill out this field !</div>
          </div>
          <div class="form-group">
            <label for="foto">Attachment<small><i> (Max Size : 10, Max File : 6 File)</i></small></label><br>
            <input id="input-foto" name="document[]" type="file" class="file" data-show-upload="false" data-show-caption="true" multiple required>
            <div class="invalid-feedback">Please fill out this field !</div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-basic border round w-25" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-sm btn-info round w-25">Save</button>
        </div>
      </form>
      <script>
        (function() {
          'use strict';
          var form = document.getElementById('myForm');
          form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        })();
      </script>
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
      ajax: '../dataset/document_approval_history.json',
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