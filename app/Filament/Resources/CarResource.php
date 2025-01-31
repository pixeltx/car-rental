<?php

namespace App\Filament\Resources;

use App\Models\Car;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\RestoreAction;
use App\Filament\Resources\CarResource\Pages;
use Filament\Tables\Actions\RestoreBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CarResource\RelationManagers;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static ?string $navigationGroup = 'Kendaraan';

    public static function getLabel(): string
    {
        return 'Kendaraan';
    }

    public static function getPluralLabel(): string
    {
        return 'Kendaraan';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('car_name')
                    ->label('Nama Mobil')
                    ->required(),
                Select::make('brand_id')
                    ->label('Brand')
                    ->relationship('brand', 'brand_name')
                    ->required(),
                Select::make('model_id')
                    ->label('Model Mobil')
                    ->relationship('model', 'model_name')
                    ->required(),
                // TextInput::make('car_plate')
                //     ->label('Plat Mobil'),
                FileUpload::make('image')
                    ->label('Gambar Mobil')
                    ->image()
                    ->directory('uploads/cars') //Direktori penyimpanan gambar mobil
                    ->maxSize(2048) //Batas ukuran file dalam KB
                    ->required(),
                Select::make('transmission')
                    ->label('Transmisi')
                    ->options([
                        'Automatic' => 'Automatic',
                        'Manual' => 'Manual',
                        'AT/MT' => 'AT/MT',
                    ])
                    ->required(),
                TextInput::make('engine_capacity')
                    ->label('Kapasitas Mesin (CC)')
                    ->numeric()
                    ->required(),
                TextInput::make('seat_capacity')
                    ->label('Kapasitas Kursi')
                    ->numeric()
                    ->required(),
                TextInput::make('price')
                    ->label('Harga / Hari')
                    ->numeric()
                    ->required(),
                Textarea::make('description')
                    ->label('Deskripsi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('car_name')->label('Car Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('brand.brand_name')->label('Brand'),
                TextColumn::make('model.model_name')->label('Model'),
                // TextColumn::make('car_plate')->label('Car Plate'),
                TextColumn::make('transmission')->label('Transmission'),
                TextColumn::make('engine_capacity')->label('Engine Capacity'),
                TextColumn::make('seat_capacity')->label('Seat Capacity'),
                TextColumn::make('price')->label('Price'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}
