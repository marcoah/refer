# Estructura datos

Modelos

* Pieza

| Nombre campo | Tipo Campo | Atributos | Descripcion | 
|:---------|:----------:|:---------|:---------|
| NPRO    | string    | |
| DPRO    | string    | | 

            $table->string('');
            $table->string('');
            $table->string('TVEH')->nullable();
            $table->string('ZDOC')->nullable();
            $table->string('CPRO')->nullable();
            $table->string('CORT')->nullable();
            $table->string('REEM')->nullable();
            $table->string('UBIC')->nullable();
            $table->integer('STOC')->default(0);
            $table->string('PCUR')->nullable();
            $table->string('PEND')->nullable();
            $table->string('DIFE')->nullable();
            $table->date('FUEN')->nullable();
            $table->date('FUSA')->nullable();
            $table->double('BPCL', 18, 2)->default(0);
            $table->double('PDUM', 18, 2)->default(0);
            $table->double('PDUA', 18, 2)->default(0);
            $table->double('BPNC', 18, 2)->default(0);
            $table->string('FAM1')->nullable();
            $table->string('FAMI')->nullable();
            $table->string('NPRV')->nullable();
            $table->string('CADU')->nullable();

* Cliente

            $table->string('nombre_empresa');
            $table->string('codigo_tributario')->nullable();
            $table->string('tipo')->nullable();
            $table->string('celular')->nullable();
            $table->string('telefono1')->nullable();
            $table->string('telefono2')->nullable();
            $table->string('contacto')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->text('direccion1')->nullable();
            $table->string('ciudad1')->nullable();
            $table->string('estado1')->nullable();
            $table->string('postalcode1')->nullable();
            $table->string('pais1')->nullable();
            $table->text('direccion2')->nullable();
            $table->string('ciudad2')->nullable();
            $table->string('estado2')->nullable();
            $table->string('postalcode2')->nullable();
            $table->string('pais2')->nullable();
            $table->text('actividad')->nullable();
            $table->text('observaciones')->nullable();
            $table->string('status')->nullable();

* Categoria

            $table->string('nombre');
            $table->string('codigo');
            $table->text('descripcion')->nullable();

            