import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { useForm } from '@inertiajs/react';
import GuestLayout from '@/Layouts/GuestLayout';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import Dropdown from '@/Components/Dropdown';

export default function Dashboard({ auth }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
    });
    
    // console.log(item);
    const submit = (e) => {
        e.preventDefault();

        post(route('add'));
    };

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">You're logged in!</div>
                    </div>
                </div>
            </div>
            <div>
                {/* {item.map((items) => 
                    
                )} */}
            </div>

            <div className='mx-10'>
                Ayo tambah barang !
                <form onSubmit={submit}>
                    <div>
                        <InputLabel htmlFor="name" value="Name" />

                        <TextInput
                            id="name"
                            name="name"
                            value={data.name}
                            className="mt-1 block w-full"
                            autoComplete="name"
                            isFocused={true}
                            onChange={(e) => setData('name', e.target.value)}
                            required
                        />

                        <InputError message={errors.name} className="mt-2" />
                    </div>

                    <div className="mt-4">
                        <InputLabel htmlFor="kondisi" value="kondisi" />

                        <select id='kondisi' name='kondisi'>
                            <option>baik</option>
                            <option>layak</option>
                            <option>rusak</option>
                        </select>
                       
                        <InputError message={errors.kondisi} className="mt-2" />
                    </div>

                    <div className="mt-4">
                        <InputLabel htmlFor="keterangan" value="Keterangan" />

                        <TextInput
                            id="keterangan"
                            name="keterangan"
                            value={data.keterangan}
                            className="mt-1 block w-full"
                            onChange={(e) => setData('keterangan', e.target.value)}
                            required
                        />

                        <InputError message={errors.kecacatan} className="mt-2" />
                    </div>

                    <div className="mt-4">
                        <InputLabel htmlFor="kecacatan" value="Kecacatan" />

                        <TextInput
                            id="kecacatan"
                            name="kecacatan"
                            value={data.kecacatan}
                            className="mt-1 block w-full"
                            onChange={(e) => setData('kecacatan', e.target.value)}
                            required
                        />

                        <InputError message={errors.kecacatan} className="mt-2" />
                    </div>

                    <div className="mt-4">
                        <InputLabel htmlFor="jumlah" value="Jumlah" />

                        <TextInput
                            id="jumlah"
                            type="number"
                            name="jumlah"
                            value={data.jumlah}
                            className="mt-1 block w-full"
                            autoComplete="new-password"
                            onChange={(e) => setData('jumlah', e.target.value)}
                            required
                        />

                        <InputError message={errors.jumlah} className="mt-2" />
                    </div>

                    <div className="mt-4">
                        <InputLabel htmlFor="gambar" value="Gambar" />

                        <input
                            id="gambar"
                            type="file"
                            name="gambar"
                            value={data.gambar}
                            className="mt-1 block w-full"
                            onChange={(e) => setData('gambar', e.target.value)}
                            required
                        />

                        <InputError message={errors.gambar} className="mt-2" />
                    </div>
            </form>
            </div>
        </AuthenticatedLayout>
    );
}
