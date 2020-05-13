@extends('libros.master')
<form method="POST" action="{{ route('archivo.upload') }}" enctype="multipart/form-data">
    @csrf
    <label for="archivo">Carga de Archivo</label>
    <input name="mi_archivo" type="file">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
