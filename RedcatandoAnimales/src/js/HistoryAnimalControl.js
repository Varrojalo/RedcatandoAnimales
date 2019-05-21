import {ObtenerAnimales} from 'AnimalesDao.js';

function LlenarTabla() {
     ObtenerAnimales(sessionStorage.getItem());
}