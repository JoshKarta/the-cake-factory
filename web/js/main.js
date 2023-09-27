function Toast(elementId) {
  const toastLiveExample = document.getElementById(elementId);

  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
  toastBootstrap.show();
}
