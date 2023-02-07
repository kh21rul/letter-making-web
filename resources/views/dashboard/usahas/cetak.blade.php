<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contoh Surat</title>
    <style>
      /* add body to center in dompdf */
      body {
        margin: 0 auto;
        width: 600px;
      }
    </style>
  </head>
  <body>
    <center>
      <table width="450">
        <tr>
          <td><img src="{{ asset('dashmin/img/logo_cetak.svg') }}" width="110" height="110" /></td>
          <td style="font-family: 'Times New Roman', Times, serif; font-size: 13px">
            <center>
              <font size="5"><b>PEMERINTAH KOTA LHOKSEUMAWE</b> </font><br />
              <font size="4"><b>KECAMATAN MUARA DUA</b></font
              ><br />
              <font size="5"><b>GAMPONG PAYA PUNTEUET</b></font
              ><br />
              <font size="3"><i>JLN. Tgk, WAHAB DAHLAWI KM.1</i></font
              ><br />
            </center>
          </td>
          
        </tr>
        <tr>
          <td colspan="2"><hr style="border: 1px solid" /></td>
        </tr>
      </table>
      <br />
      <table width="450">
        <tr>
          <td style="font-family: 'Times New Roman', Times, serif; font-size: 18px; text-align: center; font-weight: bold" class="text">
            <u>SURAT KETERANGAN USAHA</u>
          </td>
        </tr>
        <tr>
          <td style="text-align: center">Nomor : {{ $usaha->kodeSurat }}/{{ $usaha->noSurat }}/2023</td>
        </tr>
      </table>
      <br /><br /><br />
      <table width="450">
        <tr>
          <td>Keuchik Gampong Paya Punteuet Kecamatan Muara Dua Pemerintah Kota Lhokseumawe, dengan ini menerangkan bahwa :</td>
        </tr>
      </table>
      <br /><br />
      <table width="450">
        <tr>
          <td width="200">Nama</td>
          <td width="10">:</td>
          <td width="335">{{ $usaha->nama }}</td>
        </tr>
        <tr>
          <td width="200">NIK</td>
          <td width="10">:</td>
          <td width="335">{{ $usaha->nik }}</td>
        </tr>
        <tr>
          <td width="200">Tempat, Tanggal Lahir</td>
          <td width="10">:</td>
          <td width="335">{{ $usaha->tempatTglLahir }}</td>
        </tr>
        <tr>
          <td width="200">Pekerjaan</td>
          <td width="10">:</td>
          <td width="335">{{ $usaha->pekerjaan }}</td>
        </tr>
        <tr>
          <td width="200">Alamat</td>
          <td width="10">:</td>
          <td width="300">{{ $usaha->alamat }}</td>
        </tr>
      </table>
      <br /><br />
      <table width="450">
        <tr>
          <td>
            {!! $usaha->keterangan !!}
          </td>
        </tr>
        <br /><br />
      </table>
      <br /><br />
      <table width="450">
        <tr>
          <td>Demikian surat keterangan ini kami perbuat untuk dapat dipergunakan seperlunya.</td>
        </tr>
      </table>
      <br /><br /><br />
      <table width="450">
        <tr>
          <td width="300"></td>
          <td style="text-align: left">Paya Punteuet, {{ date('d M Y', strtotime($usaha->tglSurat)); }}</td>
        </tr>
        <tr>
          <td width="300"></td>
          <td style="text-align: left">An. {{ $usaha->ttd }}</td>
        </tr>
      </table>
      <br /><br />
      <table width="450" style="margin-bottom: 100px">
        <tr>
            <td width="300"></td>
            <td style="text-align: left">{{ $usaha->namaTtd }}</td>
        </tr>
      </table>
    </center>
  </body>
</html>
