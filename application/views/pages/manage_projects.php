<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <!--page start-->
    <div class="row">
      <div class="col-sm-12">
        <section class="panel">
          <header class="panel-heading">
            Manage Projects
          </header>
          <div class="panel-body">
            <!--Add Project-->
            <form class=" red_border col-sm-6">
              <input  type="button" class="_red btn btn-danger" value="Add Project" onclick="window.location.href='<?=base_url('main/add_project')?>'"/>
            </form>
            <!--Search-->
            <form class=" red_border no_margin col-sm-3">
              <div class="no_margin form-group">
                <input type="text" class="form-control" placeholder="Search..">
                <span>
                <form>
                <label>
                  <input id="ckbx" class="radio-inline" type="radio" name="schradio"/><span class="_a">Description</span>
                </label>
                <label>
                  <input id="ckbx" class="radio-inline" type="radio" name="schradio"/><span class="_a">Name</span>
                </label>
                </form>
                <input type="submit" class="_red btn btn-danger" value="Search" id="sch"/>
                </span>
                </div>
            </form>
            <!--Sort-->
            <form class=" red_border no_margin col-sm-3">
              <div class="no_margin form-group">
                <div id="_b" class="col-xs-9">
                <form>
                <label >
                  <input id="ckbx" class="radio-block" type="radio" name="srtradio"/><span class="_a" >By Name</span>
                </label>
                <label >
                  <input id="ckbx" class="radio-block" type="radio" name="srtradio"/><span class="_a" >By Date</span>
                </label>
                <label >
                  <input id="ckbx" class="radio-block" type="radio" name="srtradio"/><span class="_a" >By Type</span>
                </label>
              </form>
                </div>
                <input type="submit" class="_red col-xs-3 btn btn-danger" value="Sort"/>
              </div>
            </form>
            <hr class="a_margin col-sm-12" style="color:red;">
            <div class="col-sm-12 table-responsive">
              <table class="13 table table-hover p-table">
                      <thead>
                      <tr>
                          <th>Action</th>
                          <th>Id</th>
                          <th>Status</th>
                          <th>Name</th>
                          <th>Type</th>
                          <th>Created By</th>
                          <th>Created At</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td class="p-action">
                            <a href="#" class="_red btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="_red btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                          <td class="p-id">
                            1
                          </td>
                          <td class="p-status">
                              <div class="no_margin progress progress-xs">
                                  <div style="width: 87%;" class="_red progress-bar progress-bar-success"></div>
                              </div>
                              <small>Open: 87% Complete </small>
                          </td>
                          <td>
                              <a href="#" style="color:red;" class="red p-name">Test Project</a>
                          </td>
                          <td>
                              Support
                          </td>
                          <td>
                            jc
                          </td>
                          <td>
                            1.1.16
                          </td>
                      </tr>
                      </tbody>
                  </table>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!--page end-->
  </section>
</section>
<!--main content start-->
