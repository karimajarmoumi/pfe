<div>
	<div class="card card-primary card-outline">
		<div class="card-header">
			<div class="row">
				<div class="col-6">
					<a href="{{route('users.view')}}" class="btn btn-secondary btn-sm">Retour</a>
					
				</div>
			</div>
		</div>
	    <form wire:submit.prevent="update">
            <div class="card-body">
				<div class="row">
					<div class="col-4">
						<label for="name">Le Nom d'utilisateur'</label>
						<input type="text" id="name" wire:model="name" class="form-control">
						<label for="name">email</label>
						<input type="email" id="email" wire:model="email" class="form-control">
						<label for="name">password</label>
						<input type="password" id="password" wire:model="password" class="form-control">
						<label for="name">role id</label>
						<input type="number" id="role_id" wire:model="role_id" class="form-control">
                        <label for="service_id">service_id</label>
						<input type="number" id="service_id" wire:model="service_id" class="form-control">
					</div>
				</div>
				
			</div>
			<div class="card-footer">
				<div class="row">
					<div class="col-6">
						<button type="submit" class="btn btn-primary">Sauvgarder</button>
					</div>
				</div>
			</div>
			
			
	    </form>
	</div>
</div>