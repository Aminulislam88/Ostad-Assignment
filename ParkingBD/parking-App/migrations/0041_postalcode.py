# Generated by Django 4.1.2 on 2023-01-20 19:44

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('parkingApp', '0040_booking_totalamount'),
    ]

    operations = [
        migrations.CreateModel(
            name='PostalCode',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('post_code', models.IntegerField()),
                ('neighbouring_area', models.CharField(max_length=100)),
            ],
        ),
    ]
