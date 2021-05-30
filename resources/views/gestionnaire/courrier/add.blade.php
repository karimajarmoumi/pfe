@extends('admin.layouts.gestionnaire')
@section('title','Ajouter courrier')
@push('css')
@endpush
@section('content')
<div>
	<div class="card card-primary card-outline">
		<div class="card-header">
			<div class="row">
				<div class="col-6">
					<a href="{{route('courrier.view')}}" class="btn btn-secondary btn-sm">Retour</a>

				</div>
			</div>
		</div>

        <form action="{{ url('gestionnaire/courrier/add') }}" method='POST' enctype='multipart/form-data' >
            @csrf
                        			<div class="card-body">
				<div class="row">
					<div class="col-12">
						<label for="from">source :</label>
						<input type="email" name="form" value="" class="form=control">
						<label for="to"> destination :</label>
						<input type="email"  name="to" value=""  class="form=control">
						<label for="priority">priority :</label>
						<select for="priority"  name="priority"  >
							<option value="Haute">Haute</option>
							<option value="Faible">Faible</option>
							<option value="Normal">Normal</option>

						</select>

						<label for="date">date :</label>
						<input type="date"  name="to" value=""  >

						<br><label for="file">Votre fichier : </label>
   						<input type="file"  name="file" value="" multiple>
					</div>
				</div>

			</div>
			<div class="card-footer">
				<div class="row">
					<div class="col-6">
						<button type="submit" class="btn btn-primary">Envoyer </button>
					</div>
				</div>
			</div>

		</form>
	</div>
</div>
@stop
@push('js')
@endpush
