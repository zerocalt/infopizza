function ibonoros(valor) {
    valor = valor.toString().replace(/\D/g,"");
    valor = valor.toString().replace(/(\d)(\d{2})$/,"$1.$2");
    return Number(valor);                    
}
function bonoros(valor, min){
	vd = 0;
	pontos = (valor.match(/\./g) || []).length;
	virgulas = (valor.match(/,/g) || []).length;
	if(pontos == 1 && virgulas > 1) {
		//formato americano
		valor = valor.toString();
		valor = valor.replace(',', '!!p');
		valor = valor.replace('.', ',');
		valor = valor.replace('!!p', '.');
	}
	if(pontos > 1 && virgulas > 1) {
		//formato invalido
		valor = ibonoros(valor);
	}
	if(pontos == 1 && virgulas == 0){valor = valor.replace(".", ",");}
	if(valor.includes(",")){
		//formato br
		vd = valor.toString().split(",",100)[1];
		vd = vd.replace(/\D/g,"");
		vd = vd.length;
	}
	valor = valor.toString().replace(/\D/g,"");
	valor = Number(valor);
	if(vd == 0){valor *= 100;}
	if(vd == 1 ){valor *= 10;}
	if(valor < min){valor=min;}
	valor = valor.toString();
	valor = valor.replace(/(\d)(\d{17})$/,"$1.$2");
	valor = valor.replace(/(\d)(\d{14})$/,"$1.$2");
	valor = valor.replace(/(\d)(\d{11})$/,"$1.$2");
	valor = valor.replace(/(\d)(\d{8})$/,"$1.$2");
	valor = valor.replace(/(\d)(\d{5})$/,"$1.$2");
	valor = valor.replace(/(\d)(\d{2})$/,"$1,$2");
	return 'R$ ' + valor;
}