@extends('layout.layout_peternak')
@section('title', 'heater')
@section('container')
<div class="body-wrapper-inner">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Heater Configuration</h5>
          <div class="card">
            <div class="card-body">
              <form>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Authomatic</label>
                  </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="ison" onclick="onCheckPressed()" >
                    <label class="form-check-label" for="flexSwitchCheckDefault" id="isonlabel">OFF</label>
                  </div>
              </form>
            </div>
          </div>

          </div>
        </div>
        <script >
            let ison= document.getElementById('ison').checked;

            function onCheckPressed(){
                let switch_btn=document.getElementById('ison');
                let switch_label= document.getElementById('isonlabel');
                if(switch_btn.checked){
                    switch_label.innerHTML = "ON"
                }else{
                    switch_label.innerHTML="OFF"
                }

            }

        </script>
@endsection
