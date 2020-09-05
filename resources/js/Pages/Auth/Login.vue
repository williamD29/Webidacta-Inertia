<template>
	<div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
		<div class="sm:mx-auto sm:w-full sm:max-w-md">
			<img
				class="mx-auto h-12 w-auto"
				src="https://tailwindui.com/img/logos/workflow-mark-on-white.svg"
				alt="Workflow"
			/>
			<h2
				class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900"
			>Connexion à votre compte</h2>
			<p class="mt-2 text-center text-sm leading-5 text-gray-600 max-w">
				Pas encore inscrit ?
				<BaseLink url="/register">Créer un compte</BaseLink>
			</p>
		</div>

		<div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
			<div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
				<form @submit.prevent="login" class="space-y-6">
					<BaseInput id="email" type="email" required label="Adresse email" v-model="user.email" />
					<BaseInput
						id="password"
						type="password"
						required
						label="Mot de passe"
						v-model="user.password"
					/>

					<div class="flex items-center justify-between">
						<BaseCheckbox id="remember" v-model="user.remember">
							<template #label>Se souvenir de moi</template>
						</BaseCheckbox>

						<div class="text-sm leading-5">
							<BaseLink url="/">Mot de passe oublié ?</BaseLink>
						</div>
					</div>

					<BaseButton class-names="w-full">Se connecter</BaseButton>
				</form>

				<div class="mt-6">
					<div class="relative">
						<div class="absolute inset-0 flex items-center">
							<div class="w-full border-t border-gray-300"></div>
						</div>
						<div class="relative flex justify-center text-sm leading-5">
							<span class="px-2 bg-white text-gray-500">Ou continuer avec</span>
						</div>
					</div>

					<div class="mt-6 grid grid-cols-3 gap-3">
						<div>
							<span class="w-full inline-flex rounded-md shadow-sm">
								<BaseButton
									styleType="tertiary"
									class-names="text-gray-500 hover:text-gray-400 w-full"
									aria-label="S'inscrire avec Facebook"
								>
									<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
										<path
											fill-rule="evenodd"
											d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"
											clip-rule="evenodd"
										/>
									</svg>
								</BaseButton>
							</span>
						</div>

						<div>
							<span class="w-full inline-flex rounded-md shadow-sm">
								<BaseButton
									styleType="tertiary"
									class-names="text-gray-500 hover:text-gray-400 w-full"
									aria-label="S'inscrire avec Twitter"
								>
									<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
										<path
											d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"
										/>
									</svg>
								</BaseButton>
							</span>
						</div>

						<div>
							<span class="w-full inline-flex rounded-md shadow-sm">
								<BaseButton
									styleType="tertiary"
									class-names="text-gray-500 hover:text-gray-400 w-full"
									aria-label="S'inscrire avec Google"
								>
									<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 488 512">
										<path
											d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
										/>
									</svg>
								</BaseButton>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	data() {
		return {
			user: {
				email: null,
				password: null,
				remember: false,
			},
		};
	},
	methods: {
		login() {
			this.$inertia.post("/login", this.user);
		},
	},
};
</script>

<style></style>
