<template>
	<div>
		<div class="md:grid md:grid-cols-3 md:gap-6">
			<div class="md:col-span-1">
				<div class="px-4 sm:px-0">
					<h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
					<p
						class="mt-1 text-sm leading-5 text-gray-600"
					>Choisissez quelles informations vous voulez recevoir et comment.</p>
				</div>
			</div>
			<div class="mt-5 md:mt-0 md:col-span-2">
				<form @submit.prevent>
					<div class="shadow overflow-hidden sm:rounded-md">
						<div class="px-4 py-5 bg-white sm:p-6">
							<fieldset>
								<legend class="text-base leading-6 font-medium text-gray-900">By Email</legend>
								<div class="mt-4">
									<BaseCheckbox id="comments">
										<template #label>Comments</template>
										<template #description>Get notified when someones posts a comment on a posting.</template>
									</BaseCheckbox>
									<BaseCheckbox class="mt-4" id="candidates">
										<template #label>Candidates</template>
										<template #description>Get notified when a candidate applies for a job.</template>
									</BaseCheckbox>
									<BaseCheckbox class="mt-4" id="offers">
										<template #label>Offers</template>
										<template #description>Get notified when a candidate accepts or rejects an offer.</template>
									</BaseCheckbox>
								</div>
							</fieldset>
							<fieldset class="mt-6">
								<legend class="text-base leading-6 font-medium text-gray-900">Push Notifications</legend>
								<p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p>
								<div class="mt-4">
									<BaseRadio id="push_everything" name="push_notifications">Everything</BaseRadio>
									<BaseRadio class="mt-4" id="push_email" name="push_notifications">Same as email</BaseRadio>
									<BaseRadio class="mt-4" id="push_nothing" name="push_notifications">No push notifications</BaseRadio>
								</div>
							</fieldset>
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