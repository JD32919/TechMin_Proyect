function showNextCards() {
  const set1 = document.getElementById('card-set-1');
  const set2 = document.getElementById('card-set-2');

  if (!set2.classList.contains('hidden')) {
    // Ya está mostrando el segundo set, entonces regresamos al primero
    set2.classList.add('hidden');
    set1.classList.remove('hidden');
  } else {
    // Mostrar segundo set
    set1.classList.add('hidden');
    set2.classList.remove('hidden');
  }
}