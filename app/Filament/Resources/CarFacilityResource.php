<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\CarFacility;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CarFacilityResource\Pages;
use App\Filament\Resources\CarFacilityResource\RelationManagers;

class CarFacilityResource extends Resource
{
    protected static ?string $model = CarFacility::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Kendaraan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('car_id')
                    ->relationship('car', 'car_name')
                    ->required(),
                TextInput::make('facility')
                    ->required()
                    ->maxLength(255),
                // TextInput::make('icon')
                //     ->required()
                //     ->maxLength(255),
                // Textarea::make('description'),
                FileUpload::make('images')
                ->label('Gambar')
                ->multiple()
                ->image()
                ->directory('uploads/car_facilities')
                ->disk('public') // Ensure the correct disk is used
                ->maxFiles(3)
                ->maxSize(2048)
                ->saveRelationshipsUsing(function ($component, $state, $record) {
                    $record->images()->delete();
                    foreach ($state as $image) {
                        $record->images()->create(['image' => $image]);
                    }
                }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('car.car_name')->label('Car'),
                TextColumn::make('facility')->sortable()->searchable(),
                // TextColumn::make('icon')->sortable()->searchable(),
                // TextColumn::make('description')->sortable()->searchable(),
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
            'index' => Pages\ListCarFacilities::route('/'),
            'create' => Pages\CreateCarFacility::route('/create'),
            'edit' => Pages\EditCarFacility::route('/{record}/edit'),
        ];
    }
}
