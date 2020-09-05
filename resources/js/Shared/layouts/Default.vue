<template>
	<div class="relative h-screen flex overflow-hidden bg-gray-100" @keyup.esc="sidebarOpen = false">
		<!-- Off-canvas menu for mobile -->
		<transition leave-active-class="duration-300">
			<div v-show="sidebarOpen" class="md:hidden">
				<div class="fixed inset-0 flex z-40">
					<transition
						enter-active-class="transform transition-opacity ease-linear duration-300"
						enter-class="transform opacity-0"
						enter-to-class="transform opacity-100"
						leave-active-class="transform transition-opacity ease-linear duration-300"
						leave-class="transform opacity-100"
						leave-to-class="transform opacity-0"
					>
						<div v-show="sidebarOpen" class="fixed inset-0" @click.prevent="sidebarOpen = false">
							<div class="absolute inset-0 bg-gray-600 opacity-75"></div>
						</div>
					</transition>
					<transition
						enter-active-class="transform transition ease-in-out duration-300"
						enter-class="transform -translate-x-full"
						enter-to-class="transform translate-x-0"
						leave-active-class="transform transition ease-in-out duration-300"
						leave-class="transform translate-x-0"
						leave-to-class="transform -translate-x-full"
					>
						<div v-show="sidebarOpen" class="relative flex-1 flex flex-col max-w-xs w-full bg-white">
							<div class="absolute top-0 right-0 -mr-14 p-1">
								<button
									v-show="sidebarOpen"
									class="flex items-center justify-center h-12 w-12 rounded-full focus:outline-none focus:bg-gray-600"
									aria-label="Close sidebar"
									@click.prevent="sidebarOpen = false"
								>
									<svg class="h-6 w-6 text-white" stroke="currentColor" fill="none" viewBox="0 0 24 24">
										<path
											stroke-linecap="round"
											stroke-linejoin="round"
											stroke-width="2"
											d="M6 18L18 6M6 6l12 12"
										/>
									</svg>
								</button>
							</div>
							<div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
								<div class="flex-shrink-0 flex items-center px-4">
									<img
										class="h-8 w-auto"
										src="https://tailwindui.com/img/logos/workflow-logo-on-white.svg"
										alt="Workflow"
									/>
								</div>
								<div class="px-2 mt-5">
									<BaseInput label="Rechercher" placeholder="Rechercher" :hiddenLabel="true">
										<template #icon-left>
											<svg class="mr-3 h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
												<path
													fill-rule="evenodd"
													d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
													clip-rule="evenodd"
												/>
											</svg>
										</template>
									</BaseInput>
								</div>
								<nav class="mt-5 flex-1 px-2 bg-white">
									<inertia-link
										href="/"
										:class="
                                            $inertia.page.url === '/'
                                                ? 'bg-gray-100 text-gray-900 hover:bg-gray-100 hover:text-gray-900 focus:bg-gray-200'
                                                : 'bg-transparent text-gray-600 hover:text-gray-900 hover:bg-gray-50 focus:bg-gray-100'
                                        "
										class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150"
									>
										<svg
											:class="
                                                $inertia.page.url === '/'
                                                    ? 'text-gray-500'
                                                    : null
                                            "
											class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150"
											fill="none"
											viewBox="0 0 24 24"
											stroke="currentColor"
										>
											<path
												stroke-linecap="round"
												stroke-linejoin="round"
												stroke-width="2"
												d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
											/>
										</svg>
										Tableau de bord
									</inertia-link>
									<inertia-link
										href="/students"
										:class="
                                            $inertia.page.url === '/students'
                                                ? 'bg-gray-100 text-gray-900 hover:bg-gray-100 hover:text-gray-900 focus:bg-gray-200'
                                                : 'bg-transparent text-gray-600 hover:text-gray-900 hover:bg-gray-50 focus:bg-gray-100'
                                        "
										class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150"
									>
										<svg
											:class="
                                                $inertia.page.url ===
                                                '/students'
                                                    ? 'text-gray-500'
                                                    : null
                                            "
											class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150"
											fill="none"
											viewBox="0 0 24 24"
											stroke="currentColor"
										>
											<path
												stroke-linecap="round"
												stroke-linejoin="round"
												stroke-width="2"
												d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
											/>
										</svg>
										Mes élèves
									</inertia-link>
									<a
										href="#"
										class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150"
									>
										<svg
											fill="none"
											viewBox="0 0 24 24"
											stroke="currentColor"
											class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150"
										>
											<path
												stroke-linecap="round"
												stroke-linejoin="round"
												stroke-width="2"
												d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
											/>
										</svg>
										Mes fiches
									</a>
									<a
										href="#"
										class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150"
									>
										<svg
											class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150"
											fill="none"
											viewBox="0 0 24 24"
											stroke="currentColor"
										>
											<path
												stroke-linecap="round"
												stroke-linejoin="round"
												stroke-width="2"
												d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
											/>
										</svg>
										Statistiques
									</a>
									<div class="mt-8">
										<h3
											class="px-3 text-xs leading-4 font-semibold text-gray-500 uppercase tracking-wider"
										>Élèves connectés</h3>
										<div class="mt-1 space-y-1" role="group" aria-labelledby="teams-headline">
											<a
												href="#"
												class="group flex items-center px-3 py-2 text-base leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition ease-in-out duration-150"
											>
												<span class="w-2.5 h-2.5 mr-4 bg-green-400 rounded-full"></span>
												<span class="truncate">Benoit Simon</span>
											</a>

											<a
												href="#"
												class="group flex items-center px-3 py-2 text-base leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition ease-in-out duration-150"
											>
												<span class="w-2.5 h-2.5 mr-4 bg-green-400 rounded-full"></span>
												<span class="truncate">John Doe</span>
											</a>

											<a
												href="#"
												class="group flex items-center px-3 py-2 text-base leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition ease-in-out duration-150"
											>
												<span class="w-2.5 h-2.5 mr-4 bg-orange-400 rounded-full"></span>
												<span class="truncate">William Donval</span>
											</a>
										</div>
										<div class="flex space-x-4 sm:space-x-8 mt-2 p-2">
											<BaseButton size="sm" styleType="link">Afficher plus</BaseButton>
											<BaseButton size="sm" styleType="link">Afficher moins</BaseButton>
										</div>
									</div>
								</nav>
							</div>
							<div
								v-click-outside="clickAwayMobile"
								class="flex-shrink-0 flex border-t border-gray-200 p-2"
							>
								<transition
									enter-active-class="transition ease-out duration-100"
									enter-class="transform opacity-0 scale-95"
									enter-to-class="transform opacity-100 scale-100"
									leave-active-class="transition ease-in duration-75"
									leave-class="transform opacity-100 scale-100"
									leave-to-class="transform opacity-0 scale-95"
								>
									<div
										v-show="dropdownOpenMobile"
										class="z-10 mx-3 origin-bottom bottom-0 mb-20 absolute right-0 left-0 mt-1 rounded-md shadow-lg"
									>
										<div
											class="rounded-md bg-white shadow-xs"
											role="menu"
											aria-orientation="vertical"
											aria-labelledby="options-menu"
										>
											<div class="py-1">
												<BaseLink
													url="/settings"
													replaceable-style="w-full text-left block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
												>Paramètres</BaseLink>
												<BaseLink
													url="#"
													replaceable-style="w-full text-left block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
												>Aide</BaseLink>
											</div>
											<div class="border-t border-gray-100"></div>
											<div class="py-1">
												<BaseButton
													styleType="custom"
													size="custom"
													role="menuitem"
													class-names="w-full text-left block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
													@base-button-clicked.prevent="
                                                        logout
                                                    "
												>Se déconnecter</BaseButton>
											</div>
										</div>
									</div>
								</transition>
								<button
									type="button"
									class="group w-full rounded-md px-3 py-2 text-sm leading-5 font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-500 focus:outline-none focus:bg-gray-200 focus:border-blue-300 active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150"
									aria-haspopup="true"
									aria-expanded="true"
									@click.prevent="
                                        dropdownOpenMobile = !dropdownOpenMobile
                                    "
								>
									<div class="flex w-full justify-between items-center">
										<div class="flex items-center justify-between space-x-3">
											<img
												class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
												src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
												alt
											/>
											<div class="flex-1">
												<h2 class="text-gray-900 text-sm leading-5 font-medium">Jessy Schwarz</h2>
												<p class="text-gray-500 text-sm leading-5 truncate">@jessyschwarz</p>
											</div>
										</div>
										<svg
											class="h-5 w-5 text-gray-400 group-hover:text-gray-500"
											viewBox="0 0 20 20"
											fill="currentColor"
										>
											<path
												fill-rule="evenodd"
												d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
												clip-rule="evenodd"
											/>
										</svg>
									</div>
								</button>
							</div>
						</div>
					</transition>
					<div class="flex-shrink-0 w-14">
						<!-- Force sidebar to shrink to fit close icon -->
					</div>
				</div>
			</div>
		</transition>
		<!-- Static sidebar for desktop -->
		<div class="relative hidden md:flex md:flex-shrink-0">
			<div class="flex flex-col w-64 border-r border-gray-200 bg-white">
				<div class="h-0 flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
					<div class="flex items-center flex-shrink-0 px-4">
						<img
							class="h-8 w-auto"
							src="https://tailwindui.com/img/logos/workflow-logo-on-white.svg"
							alt="Workflow"
						/>
					</div>
					<div class="px-2 mt-5">
						<BaseInput label="Rechercher" placeholder="Rechercher" :hiddenLabel="true">
							<template #icon-left>
								<svg class="mr-3 h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
									<path
										fill-rule="evenodd"
										d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
										clip-rule="evenodd"
									/>
								</svg>
							</template>
						</BaseInput>
					</div>
					<nav class="mt-5 flex-1 px-2 bg-white">
						<inertia-link
							href="/"
							:class="
                                $inertia.page.url === '/'
                                    ? 'bg-gray-100 text-gray-900 hover:bg-gray-100 hover:text-gray-900 focus:bg-gray-200'
                                    : 'bg-transparent text-gray-600 hover:text-gray-900 hover:bg-gray-50 focus:bg-gray-100'
                            "
							class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150"
						>
							<svg
								:class="
                                    $inertia.page.url === '/'
                                        ? 'text-gray-500'
                                        : null
                                "
								class="mr-3 h-6 w-6 text-gray-500 group-hover:text-gray-500 group-focus:text-gray-600 transition ease-in-out duration-150"
								fill="none"
								viewBox="0 0 24 24"
								stroke="currentColor"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									stroke-width="2"
									d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
								/>
							</svg>
							Tableau de bord
						</inertia-link>
						<inertia-link
							href="/students"
							:class="
                                $inertia.page.url === '/students'
                                    ? 'bg-gray-100 text-gray-900 hover:bg-gray-100 hover:text-gray-900 focus:bg-gray-200'
                                    : 'bg-transparent text-gray-600 hover:text-gray-900 hover:bg-gray-50 focus:bg-gray-100'
                            "
							class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150"
						>
							<svg
								:class="
                                    $inertia.page.url === '/students'
                                        ? 'text-gray-500'
                                        : null
                                "
								class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150"
								fill="none"
								viewBox="0 0 24 24"
								stroke="currentColor"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									stroke-width="2"
									d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
								/>
							</svg>
							Mes élèves
						</inertia-link>
						<a
							href="#"
							class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150"
						>
							<svg
								fill="none"
								viewBox="0 0 24 24"
								stroke="currentColor"
								class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									stroke-width="2"
									d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
								/>
							</svg>
							Mes fiches
						</a>
						<a
							href="#"
							class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150"
						>
							<svg
								class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150"
								fill="none"
								viewBox="0 0 24 24"
								stroke="currentColor"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									stroke-width="2"
									d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
								/>
							</svg>
							Statistiques
						</a>
						<div class="mt-8">
							<h3
								class="px-3 text-xs leading-4 font-semibold text-gray-500 uppercase tracking-wider"
							>Élèves connectés</h3>
							<div class="mt-1 space-y-1" role="group" aria-labelledby="teams-headline">
								<a
									href="#"
									class="group flex items-center px-3 py-2 text-base leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition ease-in-out duration-150"
								>
									<span class="w-2.5 h-2.5 mr-4 bg-green-400 rounded-full"></span>
									<span class="truncate">Benoit Simon</span>
								</a>

								<a
									href="#"
									class="group flex items-center px-3 py-2 text-base leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition ease-in-out duration-150"
								>
									<span class="w-2.5 h-2.5 mr-4 bg-green-400 rounded-full"></span>
									<span class="truncate">John Doe</span>
								</a>

								<a
									href="#"
									class="group flex items-center px-3 py-2 text-base leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition ease-in-out duration-150"
								>
									<span class="w-2.5 h-2.5 mr-4 bg-orange-400 rounded-full"></span>
									<span class="truncate">William Donval</span>
								</a>
							</div>
							<div class="flex space-x-4 sm:space-x-8 mt-2 p-2">
								<BaseButton size="xs" styleType="link">Afficher plus</BaseButton>
								<BaseButton size="xs" styleType="link">Afficher moins</BaseButton>
							</div>
						</div>
					</nav>
				</div>
				<div v-click-outside="clickAwayDesktop" class="flex-shrink-0 flex border-t border-gray-200 p-2">
					<transition
						enter-active-class="transition ease-out duration-100"
						enter-class="transform opacity-0 scale-95"
						enter-to-class="transform opacity-100 scale-100"
						leave-active-class="transition ease-in duration-75"
						leave-class="transform opacity-100 scale-100"
						leave-to-class="transform opacity-0 scale-95"
					>
						<div
							v-show="dropdownOpenDesktop"
							class="z-10 mx-3 origin-bottom bottom-0 mb-20 absolute right-0 left-0 mt-1 rounded-md shadow-lg"
						>
							<div
								class="rounded-md bg-white shadow-xs"
								role="menu"
								aria-orientation="vertical"
								aria-labelledby="options-menu"
							>
								<div class="py-1">
									<BaseLink
										url="/settings"
										replaceable-style="w-full text-left block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
									>Paramètres</BaseLink>
									<BaseLink
										url="#"
										replaceable-style="w-full text-left block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
									>Aide</BaseLink>
								</div>
								<div class="border-t border-gray-100"></div>
								<div class="py-1">
									<BaseButton
										styleType="custom"
										size="custom"
										role="menuitem"
										class-names="w-full text-left block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
										@base-button-clicked.prevent="logout"
									>Se déconnecter</BaseButton>
								</div>
							</div>
						</div>
					</transition>
					<button
						type="button"
						class="group w-full rounded-md px-3 py-2 text-sm leading-5 font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-500 focus:outline-none focus:bg-gray-200 focus:border-blue-300 active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150"
						aria-haspopup="true"
						aria-expanded="true"
						@click.prevent="
                            dropdownOpenDesktop = !dropdownOpenDesktop
                        "
					>
						<div class="flex w-full justify-between items-center">
							<div class="flex items-center justify-between space-x-3">
								<img
									class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
									src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
									alt
								/>
								<div class="flex-1">
									<h2 class="text-gray-900 text-sm leading-5 font-medium">Jessy Schwarz</h2>
									<p class="text-gray-500 text-sm leading-5 truncate">@jessyschwarz</p>
								</div>
							</div>
							<svg
								class="h-5 w-5 text-gray-400 group-hover:text-gray-500"
								viewBox="0 0 20 20"
								fill="currentColor"
							>
								<path
									fill-rule="evenodd"
									d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
									clip-rule="evenodd"
								/>
							</svg>
						</div>
					</button>
				</div>
			</div>
		</div>
		<div class="flex flex-col w-0 flex-1 overflow-hidden">
			<div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
				<button
					class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150"
					aria-label="Open sidebar"
					@click.stop="sidebarOpen = true"
				>
					<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							d="M4 6h16M4 12h16M4 18h16"
						/>
					</svg>
				</button>
			</div>
			<main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
				<slot></slot>
			</main>
		</div>
	</div>
</template>

<script>
import ClickOutside from "vue-click-outside";

export default {
	directives: {
		ClickOutside,
	},
	data() {
		return {
			sidebarOpen: false,
			dropdownOpenDesktop: false,
			dropdownOpenMobile: false,
		};
	},
	methods: {
		clickAwayDesktop() {
			return (this.dropdownOpenDesktop = false);
		},
		clickAwayMobile() {
			return (this.dropdownOpenMobile = false);
		},
		logout() {
			this.$inertia.post("/logout");
		},
	},
};
</script>
