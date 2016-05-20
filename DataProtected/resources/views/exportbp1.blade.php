<table>
  <tbody>
    <tr>
      <th>id</th>
      <th>no_pp</th>
  		<th>no_pd</th>
      <th>nama</th>
     	<th>nip</th>
      <th>pencairan</th>
      <th>nama_ppk</th>
      <th>keterangan</th>
      <th>created_at</th>

  </tr>
  @foreach($users as $user)
  <tr>
  	<td>{{$user['id']}}</td>
  	<td>{{$user['no_pp']}}</td>
    <td>{{$user['no_pd']}}</td>
    <td>{{$user['nama']}}</td>
    <td>{{$user['nip']}}</td>
    <td>{{$user['pencairan']}}</td>
    <td>{{$user['nama_ppk']}}</td>
    <td>{{$user['keterangan']}}</td>
    <td>{{substr($user['created_at'],0,10)}}</td>

  </tr>
  @endforeach
 </tbody>
</table>