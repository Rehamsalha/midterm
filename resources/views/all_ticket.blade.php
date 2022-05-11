@extends('layout.app')
@section ('content')

<div class="container">
    <form action="{{url('show')}}" method="POST" class="form-horizontal">
        @csrf
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-ticket"> My Tickets</i>
          </div>

          <div class="panel-body">
            <table class="table">
              <thead>
                <tr>
                  <th>Category</th>
                  <th>Title</th>
                  <th>Status</th>
                  <th>Last Updated</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Shipping</td>
                  <td>
                    <a href="#">
                      #8254 - Ticket 1
                    </a>
                  </td>
                  <td><span class="label label-success">Open</span></td>
                  <td>2021-11-19 07:54:15</td>
                </tr>
                <tr>
                  <td>Technical</td>
                  <td>
                    <a href="#">
                      #2011 - Ticket 2
                    </a>
                  </td>
                  <td><span class="label label-danger">Close</span></td>
                  <td>2021-11-20 07:55:13</td>
                </tr>
                <tr>
                  <td>Technical</td>
                  <td>
                    <a href="#">
                      #4213 - Ticket 3
                    </a>
                  </td>
                  <td><span class="label label-success">Open</span></td>
                  <td>2021-11-20 08:01:29</td>
                </tr>
                <tr>
                  <td>Shipping</td>
                  <td>
                    <a href="#">
                      #1234 - Task 4
                    </a>
                  </td>
                  <td><span class="label label-success">Open</span></td>
                  <td>2021-11-22 08:02:21</td>
                </tr>
                <tr>
                  <td>Technical</td>
                  <td>
                    <a href="#">
                      #6334 - Ticket 5
                    </a>
                  </td>
                  <td><span class="label label-danger">Close</span></td>
                  <td>2021-11-23 09:06:18</td>
                </tr>
                <tr>
                  <td>Sales</td>
                  <td>
                    <a href="#">
                      #2123 - Ticket 6
                    </a>
                  </td>
                  <td><span class="label label-success">Open</span></td>
                  <td>2021-11-23 09:06:54</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>
  @endsection
