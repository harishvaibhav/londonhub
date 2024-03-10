@extends('layouts.app')
@section('content')
<div class="text-4xl text-gray-800 font-bold m-2 text-center te">Analytics of the Posts</div>
<a href="/posts" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Go back</a>

@section('scripts')
<!-- Took this ajax from some stackoverflow answer -->
<script type="text/javascript">
  async function postData(url = '') {

    const response = await fetch(url, {
      method: 'GET',
      mode: 'cors',
      cache: 'no-cache',
      credentials: 'same-origin',
      headers: {
        'Content-Type': 'application/json'

      },
      redirect: 'follow',
      referrerPolicy: 'no-referrer',
    });
    return response.json();
  }
  postData('/analytics')
    .then((data) => {
      localStorage.setItem('analytics', JSON.stringify(data.analytics)) // JSON data parsed by `data.json()` call
    });

  // This method is also take from stackoverflow website
  // creating the table view dynamically using native javascript functions
  function tableCreate() {
    var body = document.getElementsByTagName('body')[0];
    var tbl = document.createElement('table');
    // tailwind classes
    tbl.className = 'table table-striped table-bordered mt-5 rounded-lg shadow';
    const analytics = JSON.parse(localStorage.getItem('analytics'));
    tbl.style.width = '100%';
    tbl.setAttribute('border', '4');
    var tbdy = document.createElement('tbody');
    for (var i = 0; i < analytics.length; i++) {
      var tr = document.createElement('tr');
      tr.style.border = '1px solid gray';
      var td = document.createElement('td');
      var td1 = document.createElement('td');
      // tailwind classes
      td.className = 'font-bold text-gray-800 p-3'
      td1.className = "font-bold text-gray-800 p-3"
      td.appendChild(document.createTextNode("Post ID: " +
        analytics[i].post_id))
      td1.appendChild(document.createTextNode("Views: " + analytics[i].view_count))
      tr.appendChild(td);
      tr.appendChild(td1);
      tbdy.appendChild(tr);
    }
    tbl.appendChild(tbdy);
    body.appendChild(tbl)
  }
  tableCreate();
</script>
@endsection
@endsection