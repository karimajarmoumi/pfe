<div>
	<div class="card card-primary card-outline">
		<div class="card-header">
			<div class="row">
				<div class="col-6">
					<a href="{{route('service.view')}}"* class="btn btn-secondary btn-sm">Retour</a>
					
				</div>
			</div>
		</div>
		<form wire:submit.prevent="store">
			<div class="card-body">
				<div class="row">
					<div class="col-4">
						<label for="name">Le Nom de Service</label>
						<input type="text" id="name" wire:model="name" class="form-control">
					</div>
				</div>
				
			</div>
			<div class="card-footer">
				<div class="row">
					<div class="col-6">
                        <button class="btn btn-primary" type="submit">sauvgarder</button>
					</div>
				</div>
			</div>
			
		</form>
	</div>
</div>