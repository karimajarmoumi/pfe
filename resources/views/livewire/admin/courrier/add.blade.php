<div>
	<div class="card card-primary card-outline">
		<div class="card-header">
			<div class="row">
				<div class="col-6">
					<a href="{{route('courrier.view')}}"* class="btn btn-secondary btn-sm">Retour</a>
					
				</div>
			</div>
		</div>
		<form wire:submit.prevent="store">
			<div class="card-body">
				<div class="row">
					<div class="col-12">
						<label for="from">source :</label>
						<input type="email" id="from" wire:model="from" class="form=control">
						<label for="to">  :</label>
						<input type="email" id="to" wire:model="to" class="form=control">
						<label for="priority">priority :</label>
						<select for="priority">
							<option value="Haute">Haute</option>
							<option value="Faible">Faible</option>
							<option value="Normal">Normal</option>

						</select>

						<label for="date">date :</label>
						<input type="date" id="date" wire:model="date">
						
						<label for="file">Votre fichier :</label>
   						<input type="file" id="file" name="file" multiple>
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