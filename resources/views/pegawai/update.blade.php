@extends('layouts.main')

@section('content')
<div class="mx-auto my-10">
    <div class="block p-6 bg-slate-900 rounded-lg" style="width: 600px">
    <form action="/pegawai/{{ $pegawai->id }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="form-group mb-6 ">
        <h1 class="flex justify-center mb-5 text-white font-bold">Edit Pegawai</h1>
        <label for="nip" class="form-label inline-block mb-2 text-gray-500">NIP</label>
        <input value="{{ old('nip', $pegawai->nip) }}" name="nip" type="text" class="form-control
          block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-200
          bg-slate-800 bg-clip-padding
          @error('nip')
          border-red-400
          @enderror
          border border-solid
          rounded-lg
          transition
          ease-in-out
          m-0
           focus:border-blue-600 focus:outline-none" id="nip" placeholder=". . .">
          @error('nip')
          <small class="text-red-400">{{ $message }}</small>
          @enderror
      </div>
      
      <div class="form-group mb-6">
        <label for="golongan_id" class="form-label inline-block mb-2 text-gray-500">ID Golongan</label>
        <select class="input-data" name="golongan_id" id="golongan_id">
          <option selected value="{{ $pegawai->golongan_id }}">{{ $pegawai->golongan_id }}</option>
          @foreach ($golongan as $g)
          <option value="{{ $g->id }}">{{ $g->id }}</option>
          @endforeach
        </select>
        @error('golongan_id')
          <small class="text-red-400">{{ $message }}</small>
        @enderror
      </div>

      <div class="form-group mb-6">
        <label for="nik" class="form-label inline-block mb-2 text-gray-500">NIK</label>
        <input value="{{ old('nik', $pegawai->nik) }}" name="nik" type="text" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          @error('nik')
          border-red-400
          @enderror
          text-gray-200
          bg-slate-800 bg-clip-padding
          border border-solid
          rounded-lg
          transition
          ease-in-out
          m-0
           focus:border-blue-600 focus:outline-none" id="nik"
          placeholder=". . .">
          @error('nik')
          <small class="text-red-400">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group mb-6">
        <label for="nama" class="form-label inline-block mb-2 text-gray-500">Nama</label>
        <input value="{{ old('nama', $pegawai->nama) }}" name="nama" type="text" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          @error('nama')
          border-red-400
          @enderror
          text-gray-200
          bg-slate-800 bg-clip-padding
          border border-solid
          rounded-lg
          transition
          ease-in-out
          m-0
           focus:border-blue-600 focus:outline-none" id="nama"
          placeholder=". . .">
          @error('nama')
          <small class="text-red-400">{{ $message }}</small>
          @enderror
      </div>

      <div class="form-group mb-6">
        <label for="jenis_kelamin" class="form-label inline-block mb-2 text-gray-500">Jenis Kelamin</label>
        <select class="input-data" name="jenis_kelamin" id="jenis_kelamin">
          <option value="Pria">Pria</option>
          <option value="Wanita">Wanita</option>
        </select>
        @error('jenis_kelamin')
          <small class="text-red-400">{{ $message }}</small>
        @enderror
      </div>
      
      <div class="form-group mb-6">
        <label for="tempat_lahir" class="form-label inline-block mb-2 text-gray-500">Tempat Lahir</label>
        <input value="{{ old('tempat_lahir', $pegawai->tempat_lahir) }}" name="tempat_lahir" type="text" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          @error('tempat_lahir')
          border-red-400
          @enderror
          font-normal
          text-gray-200
          bg-slate-800 bg-clip-padding
          border border-solid
          rounded-lg
          transition
          ease-in-out
          m-0
           focus:border-blue-600 focus:outline-none" id="tempat_lahir"
          placeholder=". . .">
          @error('tempat_lahir')
          <small class="text-red-400">{{ $message }}</small>
          @enderror
      </div>

      <div class="form-group mb-6">
        <label for="tanggal_lahir" class="form-label inline-block mb-2 text-gray-500">Tanggal Lahir</label>
        <input value="{{ old('tanggal_lahir', $pegawai->tanggal_lahir) }}" name="tanggal_lahir" type="date" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          @error('tanggal_lahir')
          border-red-400
          @enderror
          font-normal
          text-gray-200
          bg-slate-800 bg-clip-padding
          border border-solid
          rounded-lg
          transition
          ease-in-out
          m-0
           focus:border-blue-600 focus:outline-none" id="tanggal_lahir"
          placeholder=". . .">
          @error('tanggal_lahir')
          <small class="text-red-400">{{ $message }}</small>
          @enderror
      </div>

      <div class="form-group mb-6">
        <label for="telpon" class="form-label inline-block mb-2 text-gray-500">Telepon</label>
        <input value="{{ old('telpon', $pegawai->telpon) }}" name="telpon" type="text" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          @error('telpon')
          border-red-400
          @enderror
          font-normal
          text-gray-200
          bg-slate-800 bg-clip-padding
          border border-solid
          rounded-lg
          transition
          ease-in-out
          m-0
           focus:border-blue-600 focus:outline-none" id="telpon"
          placeholder=". . .">
          @error('telpon')
          <small class="text-red-400">{{ $message }}</small>
          @enderror
      </div>

      <div class="form-group mb-6">
        <label for="agama" class="form-label inline-block mb-2 text-gray-500">Agama</label>
        <input value="{{ old('agama', $pegawai->agama) }}" name="agama" type="text" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          @error('agama')
          border-red-400
          @enderror
          font-normal
          text-gray-200
          bg-slate-800 bg-clip-padding
          border border-solid
          rounded-lg
          transition
          ease-in-out
          m-0
           focus:border-blue-600 focus:outline-none" id="agama"
          placeholder=". . .">
          @error('agama')
          <small class="text-red-400">{{ $message }}</small>
          @enderror
      </div>

      <div class="form-group mb-6">
        <label for="status_nikah" class="form-label inline-block mb-2 text-gray-500">Status Nikah</label>
        <select class="input-data" name="status_nikah" id="status_nikah">
          <option value="nikah">Nikah</option>
          <option value="belum nikah">Belum nikah</option>
        </select>
      </div>      

      <div class="form-group mb-6">
        <label for="alamat" class="form-label inline-block mb-2 text-gray-500">Alamat</label>
        <input value="{{ old('alamat', $pegawai->alamat) }}" name="alamat" type="text" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          @error('alamat')
          border-red-400
          @enderror
          font-normal
          text-gray-200
          bg-slate-800 bg-clip-padding
          border border-solid
          rounded-lg
          transition
          ease-in-out
          m-0
           focus:border-blue-600 focus:outline-none" id="alamat"
          placeholder=". . .">
          @error('alamat')
          <small class="text-red-400">{{ $message }}</small>
          @enderror
      </div>

      <div class="form-group mb-6">
        <input type="hidden" name="oldImage" value="{{ $pegawai->foto }}">
        <input type="file" class=" tw-w-full tw-text-sm text-slate-500
          file:tw-mr-4 file:tw-py-2 file:tw-px-4
          file:tw-rounded-full file:tw-border-0
          file:tw-text-lg file:tw-text-gray-500 file:hover:tw-text-sims file:tw-cursor-pointer file:tw-font-semibold
          file:bg-violet-50 file:text-sims
          hover:file:bg-violet-100" 
          id="image" name="image"/>
      </div>

      <button type="submit" class="
        px-6
        py-2.5
        bg-blue-600
        text-white
        font-medium
        text-xs
        leading-tight
        uppercase
        rounded
        shadow-md
        hover:bg-blue-700 hover:shadow-lg
        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
        active:bg-blue-800 active:shadow-lg
        transition
        duration-150
        ease-in-out">Submit</button>
    </form>
  </div>
</div>



@endsection