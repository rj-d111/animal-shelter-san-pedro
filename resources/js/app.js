import './bootstrap';

import Alpine from 'alpinejs'
import Intersect from '@alpinejs/intersect'

Alpine.plugin(Intersect)

Alpine.start()

window.Alpine = Alpine