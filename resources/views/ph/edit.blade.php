@extends('layouts.default')
@section('content')

  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Editar {{ $ph->name }}</div>
                  <div class="panel-body">
                      {!! Form::open(array('url'=>'/ph','method'=>'POST', 'files'=>true)) !!}
                          {{ csrf_field() }}
                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label for="name" class="col-md-4 control-label">Nombre</label>
                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control" name="name" placeholder="{{ $ph->name }}" value="{{ old('name') }}">
                                  @if ($errors->has('name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                              <label for="address" class="col-md-4 control-label">Dirección</label>

                              <div class="col-md-6">
                                  <input id="address" type="text" class="form-control" name="address" placeholder="{{ $ph->address }}" value="{{ old('address') }}">

                                  @if ($errors->has('address'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('address') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('googlemaplink') ? ' has-error' : '' }}">
                              <label for="googlemaplink" class="col-md-4 control-label">Google Map Link</label>

                              <div class="col-md-6">
                                  <input id="googlemaplink" type="text" class="form-control" name="googlemaplink" placeholder="{{ $ph->googlemaplink }}" value="{{ old('googlemaplink') }}">

                                  @if ($errors->has('googlemaplink'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('googlemaplink') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                              <div class="input-group">
                                <label class="input-group-btn">
                                  <span class="btn btn-primary">
                                    Google Map&hellip; <input type="file" id="gmap" name="gmap" placeholder="{{ $ph->gmap }}" style="display: none;" multiple>
                                  </span>
                                </label>
                                <input type="text" class="form-control" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                              <div class="input-group">
                                <label class="input-group-btn">
                                  <span class="btn btn-primary">
                                    Plano de apartamento #1&hellip; <input type="file" id="plano1" name="plano1" placeholder="{{ $ph->plano1 }}" style="display: none;" multiple>
                                  </span>
                                </label>
                                <input type="text" class="form-control" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                              <div class="input-group">
                                <label class="input-group-btn">
                                  <span class="btn btn-primary">
                                    Plano de apartamento #2&hellip; <input type="file" id="plano2" name="plano2" placeholder="{{ $ph->plano2 }}" style="display: none;" multiple>
                                  </span>
                                </label>
                                <input type="text" class="form-control" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                              <div class="input-group">
                                <label class="input-group-btn">
                                  <span class="btn btn-primary">
                                    Plano de apartamento #3&hellip; <input type="file" id="plano3" name="plano3" placeholder="{{ $ph->plano3 }}" style="display: none;" multiple>
                                  </span>
                                </label>
                                <input type="text" class="form-control" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                              <div class="input-group">
                                <label class="input-group-btn">
                                  <span class="btn btn-primary">
                                    Foto del desarrollo #1&hellip; <input type="file" id="foto1" name="foto1" placeholder="{{ $ph->foto1 }}" style="display: none;" multiple>
                                  </span>
                                </label>
                                <input type="text" class="form-control" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                              <div class="input-group">
                                <label class="input-group-btn">
                                  <span class="btn btn-primary">
                                    Foto del desarrollo #2&hellip; <input type="file" id="foto2" name="foto2" placeholder="{{ $ph->foto2 }}" style="display: none;" multiple>
                                  </span>
                                </label>
                                <input type="text" class="form-control" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                              <div class="input-group">
                                <label class="input-group-btn">
                                  <span class="btn btn-primary">
                                    Foto del desarrollo #3&hellip; <input type="file" id="foto3" name="foto3" placeholder="{{ $ph->foto3 }}" style="display: none;" multiple>
                                  </span>
                                </label>
                                <input type="text" class="form-control" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                              <div class="input-group">
                                <label class="input-group-btn">
                                  <span class="btn btn-primary">
                                    Memoria Economica &hellip; <input type="file" id="memoria" name="memoria" placeholder="{{ $ph->memoria }}" style="display: none;" multiple>
                                  </span>
                                </label>
                                <input type="text" class="form-control" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                              <div class="input-group">
                                <label class="input-group-btn">
                                  <span class="btn btn-primary">
                                   Estado de la Obra&hellip; <input type="file" id="estado" name="estado" placeholder="{{ $ph->estado }}" style="display: none;" multiple>
                                  </span>
                                </label>
                                <input type="text" class="form-control" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                              <div class="input-group">
                                <label class="input-group-btn">
                                  <span class="btn btn-primary">
                                   Ventas &hellip; <input type="file" id="ventas" name="ventas" placeholder="{{ $ph->ventas }}" style="display: none;" multiple>
                                  </span>
                                </label>
                                <input type="text" class="form-control" readonly>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      <i class="fa fa-btn fa-user"></i> Editar PH
                                  </button>
                              </div>
                          </div>
                      {!! Form::close() !!}
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
