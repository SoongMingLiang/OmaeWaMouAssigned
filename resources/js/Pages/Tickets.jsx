import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import {
    Card,
    CardContent,
    CardDescription,
    CardHeader,
    CardTitle,
} from "@/components/ui/card";
import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogHeader,
    DialogTitle,
    DialogTrigger,
    DialogFooter,
} from "@/components/ui/dialog";
import { Button } from "@/components/ui/button"

export default function Tickets({ issues, error }) {
    if (error) {
        return <div>{error}</div>;
    }

    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Tickets
                </h2>
            }
        >
            <Head title="Tickets" />

            <div className="py-12">
                {issues.map((issue) => (
                    <div className="mx-auto max-w-7xl sm:px-6 lg:px-8 pt-2" key={issue?.id}>
                        <Card>
                            <CardHeader>
                                <CardTitle asChild><a href={issue?.html_url} className="hover:underline" target="_blank">{issue?.title} #{issue?.number}</a></CardTitle>
                                <CardDescription>{issue?.repository?.full_name}</CardDescription>
                            </CardHeader>
                            <CardContent>
                                <Dialog >
                                    <DialogTrigger asChild><Button variant="outline">Mark As Resolve</Button></DialogTrigger>
                                    <DialogContent>
                                        <DialogHeader>
                                            <DialogTitle>Are you absolutely sure?</DialogTitle>
                                            <DialogDescription>
                                                This action will mark the issue as resolved and store into database for further analysis purposes.
                                            </DialogDescription>
                                        </DialogHeader>
                                        <DialogFooter>
                                            <Button type="submit">Save changes</Button>
                                        </DialogFooter>
                                    </DialogContent>
                                </Dialog>
                            </CardContent>
                        </Card>
                    </div>
                ))}
            </div>
        </AuthenticatedLayout>
    );
}
