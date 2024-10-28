<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();

            $table->string('factura_no')->nullable();
            $table->string('torre_vano')->nullable();
            $table->string('tipo')->nullable();
            $table->string('cuerpo')->nullable();
            $table->string('pata')->nullable(); // Si aplica
            $table->string('cimentacion_pata')->nullable(); // Si aplica
            $table->string('item_contrato')->nullable();
            $table->string('unidad_medida')->nullable();
            $table->decimal('precio_unitario', 15, 2)->nullable();
            $table->string('vigencia_precio_unitario')->nullable();
            $table->decimal('cantidad_total_obra', 15, 2)->nullable();
            $table->decimal('porcentaje_a_facturar', 5, 2)->nullable(); // Solo si aplica pago parcial
            $table->decimal('cantidad_obra_facturar', 15, 2)->nullable();
            $table->decimal('subtotal_costo_directo', 15, 2)->nullable();
            $table->string('ciudad_municipio')->nullable();
            $table->string('nombre_soporte')->nullable();
            $table->string('actividad_simple')->nullable();
            $table->decimal('valor_admin', 15, 2)->nullable();
            $table->decimal('valor_utilidad', 15, 2)->nullable();
            $table->decimal('subtotal_antes_iva', 15, 2)->nullable();
            $table->text('comentario')->nullable();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
