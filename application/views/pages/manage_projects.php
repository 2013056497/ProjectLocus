<!--dynamic table-->
<link href="<?=site_url()?>assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
<link href="<?=site_url()?>assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
<link rel="stylesheet" href="<?=site_url()?>assets/data-tables/DT_bootstrap.css" />

<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
                <div class="col-sm-12">
              <section class="panel">
              <header class="panel-heading">
                  Dynamic Table
             <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
              </header>
              <div class="panel-body">
              <div class="adv-table">
              <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row-fluid"><div class="span6"><div id="dynamic-table_length" class="dataTables_length"><label><select class="form-control" size="1" name="dynamic-table_length" aria-controls="dynamic-table"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="dynamic-table_filter"><label>Search: <input type="text" class="form-control" aria-controls="dynamic-table"></label></div></div></div><table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">
              <thead>
              <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" style="width: 295px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" style="width: 398px;" aria-label="Browser: activate to sort column ascending">Browser</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" style="width: 373px;" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th><th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" style="width: 260px;" aria-label="Engine version: activate to sort column ascending">Engine version</th><th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" style="width: 196px;" aria-label="CSS grade: activate to sort column ascending">CSS grade</th></tr>
              </thead>

              <tfoot>
              <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th class="hidden-phone" rowspan="1" colspan="1">Engine version</th><th class="hidden-phone" rowspan="1" colspan="1">CSS grade</th></tr>
              </tfoot>
              <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="gradeA odd">
                  <td class=" sorting_1">Gecko</td>
                  <td class=" ">Firefox 1.0</td>
                  <td class=" ">Win 98+ / OSX.2+</td>
                  <td class="center hidden-phone ">1.7</td>
                  <td class="center hidden-phone">A</td>
              </tr><tr class="gradeA even">
                  <td class=" sorting_1">Gecko</td>
                  <td class=" ">Firefox 1.5</td>
                  <td class=" ">Win 98+ / OSX.2+</td>
                  <td class="center hidden-phone ">1.8</td>
                  <td class="center hidden-phone">A</td>
              </tr><tr class="gradeA odd">
                  <td class=" sorting_1">Gecko</td>
                  <td class=" ">Firefox 2.0</td>
                  <td class=" ">Win 98+ / OSX.2+</td>
                  <td class="center hidden-phone ">1.8</td>
                  <td class="center hidden-phone">A</td>
              </tr><tr class="gradeA even">
                  <td class=" sorting_1">Gecko</td>
                  <td class=" ">Firefox 3.0</td>
                  <td class=" ">Win 2k+ / OSX.3+</td>
                  <td class="center hidden-phone ">1.9</td>
                  <td class="center hidden-phone">A</td>
              </tr><tr class="gradeA odd">
                  <td class=" sorting_1">Gecko</td>
                  <td class=" ">Camino 1.0</td>
                  <td class=" ">OSX.2+</td>
                  <td class="center hidden-phone ">1.8</td>
                  <td class="center hidden-phone">A</td>
              </tr><tr class="gradeA even">
                  <td class=" sorting_1">Gecko</td>
                  <td class=" ">Camino 1.5</td>
                  <td class=" ">OSX.3+</td>
                  <td class="center hidden-phone ">1.8</td>
                  <td class="center hidden-phone">A</td>
              </tr><tr class="gradeA odd">
                  <td class=" sorting_1">Gecko</td>
                  <td class=" ">Netscape 7.2</td>
                  <td class=" ">Win 95+ / Mac OS 8.6-9.2</td>
                  <td class="center hidden-phone ">1.7</td>
                  <td class="center hidden-phone">A</td>
              </tr><tr class="gradeA even">
                  <td class=" sorting_1">Gecko</td>
                  <td class=" ">Netscape Browser 8</td>
                  <td class=" ">Win 98SE+</td>
                  <td class="center hidden-phone ">1.7</td>
                  <td class="center hidden-phone">A</td>
              </tr><tr class="gradeA odd">
                  <td class=" sorting_1">Gecko</td>
                  <td class=" ">Netscape Navigator 9</td>
                  <td class=" ">Win 98+ / OSX.2+</td>
                  <td class="center hidden-phone ">1.8</td>
                  <td class="center hidden-phone">A</td>
              </tr><tr class="gradeA even">
                  <td class=" sorting_1">Gecko</td>
                  <td class=" ">Mozilla 1.0</td>
                  <td class=" ">Win 95+ / OSX.1+</td>
                  <td class="center hidden-phone ">1</td>
                  <td class="center hidden-phone">A</td>
              </tr></tbody></table><div class="row-fluid"><div class="span6"><div class="dataTables_info" id="dynamic-table_info">Showing 1 to 10 of 57 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>
              </div>
              </div>
              </section>
              </div>
              </div>
        <!-- page end-->
    </section>
</section>

<!--main content end-->
