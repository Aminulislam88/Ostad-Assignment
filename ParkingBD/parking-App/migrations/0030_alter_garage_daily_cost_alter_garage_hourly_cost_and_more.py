# Generated by Django 4.1.2 on 2022-12-06 17:06

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('parkingApp', '0029_alter_garage_options_remove_garage_time'),
    ]

    operations = [
        migrations.AlterField(
            model_name='garage',
            name='daily_cost',
            field=models.FloatField(default=0),
        ),
        migrations.AlterField(
            model_name='garage',
            name='hourly_cost',
            field=models.FloatField(default=0),
        ),
        migrations.AlterField(
            model_name='garage',
            name='monthly_cost',
            field=models.FloatField(default=0),
        ),
    ]
