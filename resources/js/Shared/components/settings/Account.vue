<template>
	<div>
		<div class="md:grid md:grid-cols-3 md:gap-6">
			<div class="md:col-span-1">
				<div class="px-4 sm:px-0">
					<h3 class="text-lg font-medium leading-6 text-gray-900">Mes informations</h3>
					<p
						class="mt-1 text-sm leading-5 text-gray-600"
					>Utilisez une adresse email permanente à laquelle vous pouvez recevoir des messages.</p>
				</div>
			</div>
			<div class="mt-5 md:mt-0 md:col-span-2">
				<form @submit.prevent>
					<div class="shadow overflow-hidden sm:rounded-md">
						<div class="px-4 py-5 bg-white sm:p-6">
							<div class="grid grid-cols-6 gap-6">
								<div class="col-span-6 sm:col-span-3">
									<BaseInput label="Prénom" />
								</div>

								<div class="col-span-6 sm:col-span-3">
									<BaseInput label="Nom" />
								</div>

								<div class="col-span-6 sm:col-span-4">
									<BaseInput label="Adresse email" />
								</div>

								<div class="col-span-6">
									<label class="block text-sm leading-5 font-medium text-gray-700">Photo</label>
									<div class="mt-2 flex items-center">
										<span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
											<svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
												<path
													d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"
												/>
											</svg>
										</span>
										<span class="ml-5 rounded-md shadow-sm">
											<BaseButton styleType="tertiary">Changer</BaseButton>
										</span>
									</div>
								</div>

								<div class="col-span-6 sm:col-span-3">
									<BaseInput type="password" label="Nouveau mot de passe" />
								</div>

								<div class="col-span-6 sm:col-span-3">
									<BaseInput type="password" label="Confirmez votre nouveau mot de passe" />
								</div>
							</div>
						</div>
						<div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
							<BaseButton>Sauvegarder</BaseButton>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</template>

<script>
export default {};
</script>

<style>
</style>