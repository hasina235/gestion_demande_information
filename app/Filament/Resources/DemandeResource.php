<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DemandeResource\Pages;
use App\Filament\Resources\DemandeResource\RelationManagers;
use App\Models\Demande;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DemandeResource extends Resource
{
    protected static ?string $model = Demande::class;

    protected static ?string $navigationIcon = 'heroicon-s-clipboard-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('NumDemandeur')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('NumService')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('objet')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('detail')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('thematique')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('datedemande')
                    ->required(),
                Forms\Components\DatePicker::make('dateexpiration')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('NumDemandeur')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('NumService')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('objet')
                    ->searchable(),
                Tables\Columns\TextColumn::make('detail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('thematique')
                    ->searchable(),
                Tables\Columns\TextColumn::make('datedemande')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dateexpiration')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListDemandes::route('/'),
            'create' => Pages\CreateDemande::route('/create'),
            'edit' => Pages\EditDemande::route('/{record}/edit'),
        ];
    }
}
